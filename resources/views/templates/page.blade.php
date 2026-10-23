{{-- Plain text page (policies, FAQ) whose body is pages.content --}}
@extends('layouts.app')

@section('content')
<x-article variant="page" :title="$page->h1 ?: $page->title">
{!! $page->content !!}
</x-article>
@endsection
