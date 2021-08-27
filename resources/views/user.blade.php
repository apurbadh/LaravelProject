@extends("base")
@if ($user)
    @section("title", $user->name)
@else
    @section("title", "Not Found")
@endif

@section("body")
@if ($user)
    <p>{{ $user->name }}</p>
    <p>{{ $user->email }}</p>
@else
    <h1>Not Found</h1>
@endif


@endsection