<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class McpToken extends Model
{
    protected $fillable = ['name', 'token_hash', 'last_used_at'];

    protected $casts = ['last_used_at' => 'datetime'];

    public static function hash(string $token): string
    {
        return hash('sha256', $token);
    }
}
