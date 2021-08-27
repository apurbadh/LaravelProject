@extends("base")

@section("title", "Home")

@section("body")
<h1>Nyx</h1>
<a href="/post">Create Post</a>|<a href="/logout">Logout</a>

   @foreach ($posts as $post)
       <h2><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h2>
   @endforeach 
@endsection