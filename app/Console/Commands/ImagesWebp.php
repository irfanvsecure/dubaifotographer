<?php

namespace App\Console\Commands;

use App\Support\SiteInspector;
use Illuminate\Console\Command;

/**
 * WebP copies of the JPEG/PNG images the published pages use: photo.jpg → photo.jpg.webp,
 * at most 1920px wide. The originals stay; PageOptimizer serves the copy when it exists.
 * Run again after adding pages with new JPEG/PNG images (upload_image already makes WebP).
 */
class ImagesWebp extends Command
{
    protected $signature = 'images:webp
        {--dry-run : List what would be converted}
        {--max-width=1920 : Scale wider images down to this width}
        {--quality=82 : WebP quality}';

    protected $description = 'Make WebP copies of the JPEG/PNG images used on the published pages';

    public function handle(): int
    {
        $base = rtrim(config('app.url'), '/');
        $files = [];
        foreach ((new SiteInspector($base))->pages() as $page) {
            preg_match_all('#/assets/images/[^"\'()\s,]+\.(?:jpe?g|png)(?=["\'()\s,])#i', $page['html'], $m);
            foreach ($m[0] as $path) {
                $file = public_path(rawurldecode(ltrim($path, '/')));
                if (is_file($file)) {
                    $files[$file] = true;
                }
            }
        }

        $made = $saved = 0;
        foreach (array_keys($files) as $file) {
            if (is_file($file.'.webp') && filemtime($file.'.webp') >= filemtime($file)) {
                continue;
            }
            if ($this->option('dry-run')) {
                $this->line(str_replace(public_path(), '', $file));
                $made++;

                continue;
            }
            $image = @imagecreatefromstring((string) file_get_contents($file));
            if (! $image) {
                $this->warn('cannot read '.$file);

                continue;
            }
            imagepalettetotruecolor($image);
            imagealphablending($image, false);
            imagesavealpha($image, true);
            if (imagesx($image) > (int) $this->option('max-width')) {
                // GD returns false when it runs out of memory on a very large photo: skip that one
                $scaled = @imagescale($image, (int) $this->option('max-width'), -1, IMG_BICUBIC);
                imagedestroy($image);
                if (! $scaled) {
                    $this->warn('cannot resize (try php -d memory_limit=1024M artisan images:webp) '.$file);

                    continue;
                }
                $image = $scaled;
                imagealphablending($image, false);
                imagesavealpha($image, true);
            }
            imagewebp($image, $file.'.webp', (int) $this->option('quality'));
            imagedestroy($image);
            // keep the copy only when it is smaller
            if (filesize($file.'.webp') >= filesize($file)) {
                unlink($file.'.webp');

                continue;
            }
            $saved += filesize($file) - filesize($file.'.webp');
            $made++;
        }

        $this->info(($this->option('dry-run') ? 'Would convert ' : 'Converted ').$made.' of '.count($files).' images'
            .($saved ? ', saving '.round($saved / 1048576, 1).' MB' : '').'.');

        return self::SUCCESS;
    }
}
