<?php

namespace App\Mcp\Tools;

use App\Models\Comment;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\Server\Attributes\Description;

#[Description('Approve a blog comment (it goes live on the post) or reject it (hidden, and can be approved later). Only when the site owner asks; show them the comment first.')]
class ModerateComment extends SiteTool
{
    public function handle(Request $request): Response
    {
        $data = $request->validate(['id' => 'required|integer', 'action' => 'required|in:approve,reject']);
        $comment = Comment::query()->find($data['id']);
        if (! $comment) {
            return Response::error('Comment not found.');
        }

        $old = $comment->status;
        $comment->update(['status' => $data['action'] === 'approve' ? 'approved' : 'rejected']);
        $this->log('comment', $comment->id, ['status' => $old], ['status' => $comment->status]);

        return $this->json(['comment' => $comment->only(['id', 'author', 'status'])]);
    }

    public function schema(JsonSchema $schema): array
    {
        return [
            'id' => $schema->integer()->required(),
            'action' => $schema->string()->enum(['approve', 'reject'])->required(),
        ];
    }
}
