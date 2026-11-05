{{-- Approved comments and the comment form of a blog post (CommentController, article.css) --}}
@php
    $approved = $blog->comments()->approved()->oldest()->get();
@endphp
<div id="comments" class="comments">
    @if ($approved->isNotEmpty())
        <div class="comment-list">
            <h3 class="comment-reply-title">{{ $approved->count() }} {{ \Illuminate\Support\Str::plural('Comment', $approved->count()) }}</h3>
            @foreach ($approved as $comment)
                <article class="comment-item" id="comment-{{ $comment->id }}">
                    <p class="comment-meta"><strong>{{ $comment->author }}</strong> <time datetime="{{ $comment->created_at->toDateString() }}">{{ $comment->created_at->format('F j, Y') }}</time></p>
                    <div class="comment-body">{!! nl2br(e($comment->body)) !!}</div>
                </article>
            @endforeach
        </div>
    @endif
    <div id="respond" class="comment-respond">
        <h3 id="reply-title" class="comment-reply-title">Leave a Comment</h3>
        <form method="post" action="%%BASE%%/comments" class="comment-form" data-ajax data-url="%%BASE%%/comments/" data-success="Thank you. Your comment will appear here once it is approved." aria-label="Leave a comment">
            @csrf
            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
            <p class="comment-notes"><span id="email-notes">Your email address will not be published. Comments appear after approval.</span> <span>Required fields are marked <span class="required">*</span></span></p>
            <div class="comment-field">
                <label for="comment" class="screen-reader-text">Type here..</label>
                <textarea id="comment" name="comment" placeholder="Type here.." cols="45" rows="8" minlength="2" maxlength="3000" required></textarea>
            </div>
            <div class="comment-fields">
                <p><label for="author" class="screen-reader-text">Name*</label><input id="author" name="author" type="text" placeholder="Name*" size="30" maxlength="100" required autocomplete="name"></p>
                <p><label for="email" class="screen-reader-text">Email*</label><input id="email" name="email" type="email" placeholder="Email*" size="30" maxlength="200" required autocomplete="email"></p>
            </div>
            @include('partials.captcha')
            <p class="comment-submit"><input type="submit" value="Post Comment"></p>
        </form>
    </div>
</div>
