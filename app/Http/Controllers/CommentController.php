<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Support\Captcha;
use App\Support\OwnerMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        if (! Captcha::verify($request->input('cf-turnstile-response'))) {
            return response()->json(['success' => false, 'message' => 'Please complete the security check.'], 422);
        }

        $data = $request->validate([
            'blog_id' => ['required', 'integer'],
            'author' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:200'],
            'comment' => ['required', 'string', 'min:2', 'max:3000'],
        ]);

        $blog = Blog::query()->where('status', 'published')->findOrFail($data['blog_id']);
        abort_if(empty($blog->layout['comments']), 404);

        $comment = $blog->comments()->create([
            'author' => trim($data['author']),
            'email' => $data['email'],
            'body' => trim($data['comment']),
        ]);

        OwnerMail::send('New blog comment, waiting for approval', [
            'post' => $blog->title,
            'name' => $comment->author,
            'email' => $comment->email,
            'comment' => $comment->body,
            'comment_id' => $comment->id,
        ], $request->headers->get('referer'));

        return response()->json(['success' => true]);
    }
}
