<?php

namespace App\Mcp\Tools;

use App\Support\Sections\SectionStore;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsDestructive;

#[IsDestructive]
#[Description('Remove a section from a page. Requires its `version` from get_page_sections, and confirm: true after the site owner agreed. Its content is kept as a revision, so restore_section_revision brings it back.')]
class DeletePageSection extends SectionTool
{
    public function handle(Request $request): Response
    {
        $request->validate([
            'page_id' => 'nullable|integer',
            'slug' => 'nullable|string',
            'key' => 'required|string',
            'version' => 'required|string',
            'confirm' => 'nullable|boolean',
        ]);
        $page = $this->page($request);
        $section = $this->section($page, $request->get('key'));
        $this->checkVersion($section, $request, 'get_page_sections');
        if ($section->type === 'home_hero') {
            return Response::error('The hero holds the H1 and the quote form; it cannot be removed.');
        }
        $this->requireConfirm($request, "remove the \"{$section->key}\" section ({$section->type}) from {$this->url($page)}");

        SectionStore::delete($section);
        $revision = \App\Models\SectionRevision::query()->where('page_id', $page->id)->where('section_key', $section->key)->latest('id')->first();
        $this->log('page_section', $section->id, ['page' => $page->path(), 'key' => $section->key, 'type' => $section->type, 'data' => $section->data], ['deleted' => true]);

        return $this->json(['deleted' => $section->key, 'restore_with' => ['tool' => 'restore_section_revision', 'revision_id' => $revision?->id]]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'page_id' => $schema->integer(),
            'slug' => $schema->string()->description('Or the page slug ("" = home page)'),
            'key' => $schema->string()->required(),
            'version' => $schema->string()->required()->description('From get_page_sections'),
            'confirm' => $schema->boolean()->description('true, after the site owner agreed'),
        ];
    }
}
