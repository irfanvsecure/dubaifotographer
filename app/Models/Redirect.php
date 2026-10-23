<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Redirect extends Model
{
    protected $fillable = ['from_path', 'to_url', 'status_code', 'is_active', 'hits'];

    protected $casts = ['is_active' => 'boolean'];

    /** "/old-page/" and "old-page" are stored the same way: "/old-page" */
    public static function normalize(string $path): string
    {
        return '/'.trim((string) parse_url($path, PHP_URL_PATH), '/');
    }
}
