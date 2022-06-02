@extends('master')
@section('content')
<div class="container custom-login">
        <div class="row">
            <div class="col-sm-4" style="margin-left:350px;">
            <form action="{{url('/login')}}" method="POST">
            <div class="form-group">
                @csrf
        <label for="exampleInputEmail1">email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="email">
      </div>
<div class="form-group">
    <label for="exampleInputPassword1">password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
</div>
<div>
<button type="submit" class="btn btn-primary loginbtn">submit</button>
    
</div>


</form>
</div>
</div>
</div>
@endsection