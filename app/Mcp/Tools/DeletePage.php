<?php

namespace App\Mcp\Tools;

use App\Models\Page;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsDestructive;

#[IsDestructive]
#[Description('Move a page to the trash (soft delete; restore_item brings it back). Ask the site owner first, then call with confirm: true. Consider save_redirect for its URL.')]
class DeletePage extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate(['id' => 'required|integer', 'confirm' => 'nullable|boolean']);
        $page = Page::query()->find($data['id']);
        if (! $page) {
            return Response::error('Page not found.');
        }
        if ($page->slug === '') {
            return Response::error('The home page cannot be deleted.');
        }
        $this->requireConfirm($request, "move the page \"{$page->title}\" ({$this->url($page)}) to the trash");

        $page->delete();
        $this->log('page', $page->id, $page->only(['slug', 'title', 'status']), ['deleted' => true]);

        return $this->json(['trashed' => $this->pageArray($page), 'restore_with' => ['tool' => 'restore_item', 'type' => 'page', 'id' => $page->id]]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'id' => $schema->integer()->required(),
            'confirm' => $schema->boolean()->description('true, after the site owner agreed'),
        ];
    }
}
