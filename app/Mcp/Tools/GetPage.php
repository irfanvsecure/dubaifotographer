<?php

namespace App\Mcp\Tools;

use App\Models\Page;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[IsReadOnly]
#[Description('Read one page with its H1, body HTML, SEO and its current `version`. Call this before update_page and pass the version back.')]
class GetPage extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate([
            'id' => 'required_without:slug|nullable|integer',
            'slug' => 'required_without:id|nullable|string',
        ]);
        $page = Page::query()->with('seo')
            ->when(isset($data['id']), fn ($q) => $q->whereKey($data['id']), fn ($q) => $q->where('slug', trim((string) $data['slug'], '/')))
            ->first();

        return $page ? $this->json($this->pageArray($page, true)) : Response::error('Page not found.');
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'id' => $schema->integer()->description('Page id'),
            'slug' => $schema->string()->description('Or the URL path, e.g. "about-us" or "locations/photographer-in-ajman"; "" for the home page'),
        ];
    }
}
