@extends("base")

@section("title", "Home")

@section("body")
   @if ($post)
       <h1>{{ $post->title }}</h1>
    <a href="/user/{{ $post->user }}">{{ $post->user }}</a> | {{ $post->updated_at }}
       <p>{{ $post->desc }}</p>
   @else
       <h1>Not Found</h1>
   @endif 
@endsection