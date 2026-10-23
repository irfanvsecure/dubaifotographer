<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PageSection extends Model
{
    protected $fillable = ['page_id', 'key', 'type', 'position', 'data'];

    protected $casts = ['data' => 'array'];

    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }

    /** Saves the current state to section_revisions before it changes. */
    public function snapshot(string $action): SectionRevision
    {
        return SectionRevision::query()->create([
            'page_id' => $this->page_id,
            'section_key' => $this->key,
            'type' => $this->type,
            'position' => $this->position,
            'data' => $this->data,
            'action' => $action,
        ]);
    }
}
