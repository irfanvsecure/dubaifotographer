{{-- Blog post from the blogs table. layout holds the <x-article> options each post was designed with. --}}
@extends('layouts.app')

@php
    $l = $blog->layout ?? [];
@endphp

@section('content')
<x-article
    :variant="$l['variant'] ?? 'post'"
    :title="$blog->title"
    :title-id="$l['title_id'] ?? null"
    :order="$l['order'] ?? 'title,media,body'"
    :toc="$l['toc'] ?? null"
    :toc-items="$l['toc_items'] ?? null"
    :toc-class="$l['toc_class'] ?? ''"
    :author="$l['author'] ?? null"
    :author-url="$l['author_url'] ?? null"
    :date="array_key_exists('date', $l) ? $l['date'] : $blog->published_at?->format('F j, Y')"
    :prev="$l['prev'] ?? null"
    :next="$l['next'] ?? null"
    :comments="$l['comments'] ?? null"
    :cta="$l['cta'] ?? null"
    :class="$l['class'] ?? null">
@if (! empty($l['media']))
<x-slot:media>
{!! $l['media'] !!}
</x-slot:media>
@endif
{!! $blog->content !!}
</x-article>
@endsection
