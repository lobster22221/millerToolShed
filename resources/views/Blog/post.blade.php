@extends('app')


@section('content')

<div class="blog-post">    
    <h2 class="blog-post-title"><a href="/blog/{{ $post->id }}">{{ $post->postTitle }}</a></h2>
    <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex">
        <a class="p-2 text-muted" href="#">Previous Series</a>
        <a class="p-2 text-muted" href="#">Previous Post</a>
        <a class="p-2 text-muted" href="#">Next Post</a>     
        <a class="p-2 text-muted" href="#">Next Series</a>
    </nav>
</div>
    &emsp;{{ $post->body }}
    <br>    
        @if($post->updated_at != null)
             <p class="blog-post-meta"> Updated {{ date('d-m-Y', strtotime($post->updated_at)) }} </p>
       @elseif($post->created_at != null)
             <p class="blog-post-meta"> Created {{ date('d-m-Y', strtotime($post->created_at)) }} </p>
       @endif

<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex">
        <a class="p-2 text-muted" href="#">Previous Series</a>
        <a class="p-2 text-muted" href="#">Previous Post</a>
        <a class="p-2 text-muted" href="#">Next Post</a>     
        <a class="p-2 text-muted" href="#">Next Series</a>
    </nav>
</div>
</div>

@endsection
