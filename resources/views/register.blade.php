
@extends('master')
@section("content")
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4" style="margin-left:350px;">
            <form action="/register" method="POST">
            @csrf
            <div class="form-group">
        <label for="name">User Name</label>
        <input type="name" name="name" class="form-control" id="name" placeholder="user name">
      </div>
            <div class="form-group">
        <label for="exampleInputEmail1">email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="email">
      </div>
<div class="form-group">
    <label for="exampleInputPassword1">password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
</div>

    <button type="submit" class="btn btn-primary loginbtn">Register</button>

</form>
</div>
</div>
</div>
 @endsection