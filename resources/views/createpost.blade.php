@extends("base")

@section("title", "Create Post")

@section("body")
    <form action="" method="POST">
        @csrf
        <input name="title"><br>
        <textarea name="desc"></textarea><br>
        <input type="submit" value="Post"/>

    </form>
    
@endsection