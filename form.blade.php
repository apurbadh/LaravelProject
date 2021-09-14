<html>
<head>
  <title>Register</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
  form{
    width: 25%;
    margin: auto;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
    justify-content: center;
    border: 1px solid whitesmoke;
    padding: 50px;
    box-shadow: 10px;
    background-color: whitesmoke;
  }
  </style>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
  <h3>Register</h3>
  <br/>
  @csrf
  <div class="form-group">
    <label for="fullname">Full name</label>
    <input type="text" class="form-control" id="fullname" placeholder="Enter full name" name="fullname" required>
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
  </div>
  <div class="form-group">
    <label>Profile Picture : </label>
    <input type="file" name="profile" required>
  </div>
  <a style="text-align: center;" href="/login">Already have an account ?</a><br/><br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
<html>
