<?php

namespace App\Mcp\Tools;

use App\Support\Sections\SectionStore;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;

#[Description('Change the order of a page\'s sections: send every section key once, in the new order. This moves many sections at once, so show the new order to the site owner and pass confirm: true after they agree. The old positions are kept as revisions.')]
class ReorderPageSections extends SectionTool
{
    public function handle(Request $request): Response
    {
        $request->validate([
            'page_id' => 'nullable|integer',
            'slug' => 'nullable|string',
            'keys' => 'required|array|min:1',
            'keys.*' => 'string',
            'confirm' => 'nullable|boolean',
        ]);
        $page = $this->page($request);
        $old = $page->sections()->pluck('key')->all();
        $this->requireConfirm($request, 'reorder the sections of '.$this->url($page).' to: '.implode(', ', $request->get('keys')));

        SectionStore::reorder($page, $request->get('keys'));
        $this->log('page_section', null, ['page' => $page->path(), 'order' => $old], ['order' => $request->get('keys')]);

        return $this->json(['order' => $page->sections()->pluck('key')->all(), 'url' => $this->url($page)]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'page_id' => $schema->integer(),
            'slug' => $schema->string()->description('Or the page slug ("" = home page)'),
            'keys' => $schema->array()->items($schema->string())->required()->description('All section keys in the new order'),
            'confirm' => $schema->boolean()->description('true, after the site owner agreed'),
        ];
    }
}
