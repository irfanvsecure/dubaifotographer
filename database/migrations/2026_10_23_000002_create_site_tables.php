<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Redirects, media library, site settings, the change log and MCP access tokens.
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('redirects', function (Blueprint $table) {
            $table->id();
            $table->string('from_path', 191)->unique();
            $table->string('to_url');
            $table->unsignedSmallInteger('status_code')->default(301);
            $table->boolean('is_active')->default(true);
            $table->unsignedInteger('hits')->default(0);
            $table->timestamps();
        });

        // file_path is relative to public/ ("assets/images/2026/09/x.webp")
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('file_path', 191)->unique();
            $table->string('alt_text')->nullable();
            $table->string('title')->nullable();
            $table->unsignedInteger('width')->nullable();
            $table->unsignedInteger('height')->nullable();
            $table->unsignedBigInteger('size')->nullable();
            $table->string('mime', 50)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key', 191)->unique();
            $table->json('value')->nullable();
            $table->timestamps();
        });

        Schema::create('activity_log', function (Blueprint $table) {
            $table->id();
            $table->string('tool', 100);
            $table->string('entity', 50)->nullable();
            $table->unsignedBigInteger('entity_id')->nullable();
            $table->longText('old_value')->nullable();
            $table->longText('new_value')->nullable();
            $table->timestamp('created_at')->nullable()->index();
            $table->index(['entity', 'entity_id']);
        });

        // only the SHA-256 hash of a token is stored
        Schema::create('mcp_tokens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('token_hash', 64)->unique();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mcp_tokens');
        Schema::dropIfExists('activity_log');
        Schema::dropIfExists('settings');
        Schema::dropIfExists('media');
        Schema::dropIfExists('redirects');
    }
};
