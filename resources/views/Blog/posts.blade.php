@extends('app')


@section('content')


@foreach($posts as $post)
<div class="blog-post">
    <h2 class="blog-post-title"><a href="/blog/{{ $post->id }}">{{ $post->postTitle }}</a></h2>
    &emsp;{{ $post->body }}
    <br>    
        @if($post->updated_at != null)
             <p class="blog-post-meta"> Updated {{ date('d-m-Y', strtotime($post->updated_at)) }} </p>
       @elseif($post->created_at != null)
             <p class="blog-post-meta"> Created {{ date('d-m-Y', strtotime($post->created_at)) }} </p>
       @endif
</div>
@endforeach

@endsection

