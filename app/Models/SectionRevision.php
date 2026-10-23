<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SectionRevision extends Model
{
    public const UPDATED_AT = null;

    protected $fillable = ['page_id', 'section_key', 'type', 'position', 'data', 'action'];

    protected $casts = ['data' => 'array'];

    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }
}
