<?php

namespace App\Mcp\Tools;

use App\Models\Blog;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Tools\Annotations\IsDestructive;

#[IsDestructive]
#[Description('Move a blog post to the trash (soft delete; restore_item brings it back). Ask the site owner first, then call with confirm: true. Consider save_redirect for its URL.')]
class DeleteBlog extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate(['id' => 'required|integer', 'confirm' => 'nullable|boolean']);
        $blog = Blog::query()->find($data['id']);
        if (! $blog) {
            return Response::error('Blog post not found.');
        }
        $this->requireConfirm($request, "move the post \"{$blog->title}\" ({$this->url($blog)}) to the trash");

        $blog->delete();
        $this->log('blog', $blog->id, $blog->only(['slug', 'title', 'status']), ['deleted' => true]);

        return $this->json(['trashed' => $this->blogArray($blog), 'restore_with' => ['tool' => 'restore_item', 'type' => 'blog', 'id' => $blog->id]]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'id' => $schema->integer()->required(),
            'confirm' => $schema->boolean()->description('true, after the site owner agreed'),
        ];
    }
}
