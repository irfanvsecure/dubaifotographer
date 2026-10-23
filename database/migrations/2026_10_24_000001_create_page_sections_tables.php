<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Body content of designed pages, one row per section (types: App\Support\Sections\SectionTypes),
// and the history of every change so any earlier version can be restored.
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('page_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->constrained()->cascadeOnDelete();
            $table->string('key', 100);
            $table->string('type', 50);
            $table->unsignedInteger('position')->default(0);
            $table->json('data');
            $table->timestamps();
            $table->unique(['page_id', 'key']);
            $table->index(['page_id', 'position']);
        });

        // the state of a section before a change (action: update, delete, reorder, restore, add)
        Schema::create('section_revisions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->constrained()->cascadeOnDelete();
            $table->string('section_key', 100);
            $table->string('type', 50);
            $table->unsignedInteger('position')->nullable();
            $table->json('data')->nullable();
            $table->string('action', 20);
            $table->timestamp('created_at')->nullable();
            $table->index(['page_id', 'section_key']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('section_revisions');
        Schema::dropIfExists('page_sections');
    }
};
