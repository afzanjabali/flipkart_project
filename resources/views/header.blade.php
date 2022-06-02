<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();

}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">flipkart</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/orderlist">orders</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
        <form action="{{url('search')}}" class="d-flex">
        <input class="form-control me-2" name="result" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">search</button>
      </form>
      </ul>
      
      <ul class ="nav navbar-nav navbar-right">
          <li class="cart"><a href="{{url('/cartlist')}}">Cart{{$total}}</a></li>
          @if(Session::has('user'))
            <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{{Session::get('user')['name']}}</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item logouttext" href="/logout">log out</a></li>
      @else
      <li><a class="dropdown-item logintext" href="/login">log in</a></li>
      <li><a class="dropdown-item logintext" href="/register">register</a></li>

      @endif

    </ul>
  </li>
</ul>
    </div>
  </div>
</nav>