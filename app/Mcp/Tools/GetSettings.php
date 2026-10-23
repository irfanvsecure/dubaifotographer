<?php

namespace App\Mcp\Tools;

use App\Models\Setting;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
#[Description('Read the site settings: site_name, default_meta_description, default_og_image, robots_txt, social_links and contact (phone, email, WhatsApp, address).')]
class GetSettings extends SiteTool
{
    public const KEYS = ['site_name', 'default_meta_description', 'default_og_image', 'robots_txt', 'social_links', 'contact'];

    public function handle(Request $request): Response
    {
        return $this->json(Setting::query()->whereIn('key', self::KEYS)->pluck('value', 'key')->all() + [
            'note' => 'default_og_image is a path under public/ (e.g. assets/images/…). social_links and contact are objects; update_settings merges the keys you send into them. The footer reads social_links and contact.',
        ]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [];
    }
}
