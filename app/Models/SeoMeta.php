<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class SeoMeta extends Model
{
    protected $table = 'seo_meta';

    protected $fillable = [
        'meta_title', 'meta_description', 'canonical_url', 'robots', 'og_title',
        'og_description', 'og_image', 'schema_json', 'focus_keyword',
    ];

    public function seoable(): MorphTo
    {
        return $this->morphTo();
    }

    /** schema_json holds one JSON-LD object or a list of them */
    public function schemas(): array
    {
        $data = json_decode((string) $this->schema_json, true);
        if (! is_array($data)) {
            return [];
        }

        return array_is_list($data) ? $data : [$data];
    }
}
