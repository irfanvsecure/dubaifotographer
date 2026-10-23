<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    public const UPDATED_AT = null;

    protected $table = 'activity_log';

    protected $fillable = ['tool', 'entity', 'entity_id', 'old_value', 'new_value'];

    public static function record(string $tool, ?string $entity, ?int $id, mixed $old, mixed $new): void
    {
        static::query()->create([
            'tool' => $tool,
            'entity' => $entity,
            'entity_id' => $id,
            'old_value' => $old === null ? null : json_encode($old, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
            'new_value' => $new === null ? null : json_encode($new, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
        ]);
    }
}
