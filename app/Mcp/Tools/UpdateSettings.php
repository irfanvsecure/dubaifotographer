<?php

namespace App\Mcp\Tools;

use App\Models\Setting;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;

#[Description('Change site settings. Send only what changes. robots_txt replaces the whole robots.txt (the Sitemap line is added automatically; never add "Disallow: /" unless the owner asks to hide the site). social_links / contact are merged into the existing values.')]
class UpdateSettings extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'site_name' => 'sometimes|string|max:100',
            'default_meta_description' => 'sometimes|string|max:320',
            'default_og_image' => 'sometimes|string|max:255',
            'robots_txt' => 'sometimes|string|max:5000',
            'social_links' => 'sometimes|array',
            'social_links.*' => 'nullable|url',
            'contact' => 'sometimes|array',
            'contact.*' => 'nullable|string|max:255',
        ]);
        if (! $data) {
            return Response::error('Send at least one setting: '.implode(', ', GetSettings::KEYS));
        }
        if (isset($data['default_og_image'])) {
            $data['default_og_image'] = ltrim(str_replace('%%BASE%%', '', $this->placeholders($data['default_og_image'])), '/');
            if (! is_file(public_path($data['default_og_image']))) {
                return Response::error("default_og_image: public/{$data['default_og_image']} does not exist.");
            }
        }

        $old = [];
        foreach ($data as $key => $value) {
            $old[$key] = Setting::get($key);
            if (in_array($key, ['social_links', 'contact'], true)) {
                $value = array_filter(array_merge((array) $old[$key], $value), fn ($v) => $v !== null);
            }
            Setting::put($key, $value);
            $data[$key] = $value;
        }
        $this->log('settings', null, $old, $data);

        return $this->json(['updated' => $data]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'site_name' => $schema->string(),
            'default_meta_description' => $schema->string()->description('Used when a page has no meta description'),
            'default_og_image' => $schema->string()->description('Path under public/, e.g. assets/images/uploads/2026/10/share.webp'),
            'robots_txt' => $schema->string()->description('Full robots.txt text'),
            'social_links' => $schema->object()->description('{"facebook": url, "instagram": url, "youtube": url}; null removes one'),
            'contact' => $schema->object()->description('{"phone", "phone_link", "whatsapp", "email", "address", "maps_url"}'),
        ];
    }
}
