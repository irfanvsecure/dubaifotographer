<?php

namespace App\Support;

use App\Models\Media;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use RuntimeException;

/**
 * Images added through MCP: fetched from a URL or base64, scaled down to max_width,
 * saved as WebP under public/assets/images/uploads/YYYY/MM and recorded in the media table.
 */
class ImageUploader
{
    private const MAX_BYTES = 15 * 1024 * 1024;

    public static function fromUrl(string $url): string
    {
        $parts = parse_url($url);
        if (! in_array($parts['scheme'] ?? '', ['http', 'https'], true) || empty($parts['host'])) {
            throw new RuntimeException('Only http(s) image URLs can be fetched.');
        }
        // no requests to this server's own network (localhost, private ranges)
        foreach (gethostbynamel($parts['host']) ?: [] as $ip) {
            if (! filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
                throw new RuntimeException('That host is on a private network and cannot be fetched.');
            }
        }
        $response = Http::timeout(20)->withOptions(['allow_redirects' => ['max' => 3, 'protocols' => ['http', 'https']]])->get($url);
        if (! $response->successful()) {
            throw new RuntimeException("Download failed with HTTP {$response->status()}.");
        }
        if (strlen($response->body()) > self::MAX_BYTES) {
            throw new RuntimeException('The image is larger than 15 MB.');
        }

        return $response->body();
    }

    public static function fromBase64(string $data): string
    {
        $bytes = base64_decode(preg_replace('#^data:[^;]+;base64,#', '', $data), true);
        if ($bytes === false || $bytes === '') {
            throw new RuntimeException('image_base64 is not valid base64.');
        }
        if (strlen($bytes) > self::MAX_BYTES) {
            throw new RuntimeException('The image is larger than 15 MB.');
        }

        return $bytes;
    }

    public static function store(string $bytes, string $name, string $alt, ?string $title, int $maxWidth = 1920, int $quality = 82): Media
    {
        if (! @getimagesizefromstring($bytes)) {
            throw new RuntimeException('The file is not an image GD can read (JPEG, PNG, GIF or WebP).');
        }
        $image = @imagecreatefromstring($bytes);
        if (! $image) {
            throw new RuntimeException('The image could not be decoded.');
        }
        imagepalettetotruecolor($image);
        imagealphablending($image, false);
        imagesavealpha($image, true);

        if (imagesx($image) > $maxWidth) {
            $scaled = @imagescale($image, $maxWidth, -1, IMG_BICUBIC);
            imagedestroy($image);
            if (! $scaled) {
                throw new RuntimeException('The image is too large to resize on this server. Upload a smaller version (under about 4000px wide).');
            }
            $image = $scaled;
            imagealphablending($image, false);
            imagesavealpha($image, true);
        }

        $dir = 'assets/images/uploads/'.date('Y/m');
        File::ensureDirectoryExists(public_path($dir));
        $base = Str::slug(pathinfo($name, PATHINFO_FILENAME)) ?: 'image';
        $path = "$dir/$base.webp";
        for ($i = 2; is_file(public_path($path)) || Media::withTrashed()->where('file_path', $path)->exists(); $i++) {
            $path = "$dir/$base-$i.webp";
        }

        if (! imagewebp($image, public_path($path), $quality)) {
            throw new RuntimeException('Saving the WebP file failed.');
        }
        $width = imagesx($image);
        $height = imagesy($image);
        imagedestroy($image);

        return Media::query()->create([
            'file_path' => $path,
            'alt_text' => $alt,
            'title' => $title,
            'width' => $width,
            'height' => $height,
            'size' => filesize(public_path($path)),
            'mime' => 'image/webp',
        ]);
    }

    /** <img> markup for content: lazy, with its size so the page does not jump */
    public static function snippet(Media $media): string
    {
        return sprintf(
            '<img src="%s" alt="%s" width="%d" height="%d" loading="lazy" decoding="async">',
            $media->url(),
            e((string) $media->alt_text),
            $media->width,
            $media->height
        );
    }
}
