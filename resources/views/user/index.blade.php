<html>
<head>
  <title>Students</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
  @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    <a href="/user/create"><button class="btn btn-primary" style="margin: 20px; text-align:center">Create Students</button></a>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fullname</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
@foreach ($users as $user )
    <tr>
      <th scope="row">{{ $user->id }}</th>
      <td>{{ $user->fullname }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>
        <form action="/student/{{ $user->id }}" method="POST">
          @csrf
          @method("DELETE")
         <a href="{{ route('student.edit',$user->id) }}"> <button class="btn btn-success">Edit</button></a>
        <button class="btn btn-danger" onclick="return confirm('Do you really want to delete student!')">Delete</button>
      </form>
        </td>
    </tr>
@endforeach
  </tbody>
</table>
</body>