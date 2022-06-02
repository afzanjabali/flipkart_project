
@extends('master')
@section('content')
<div class="custom-product">
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <!-- <div class="carousel-indicators"> -->
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <!-- <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button> -->
    <!-- <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
    <!-- <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button> -->
    <!-- <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button> -->
  <!-- </div> -->
  
  <div class="carousel-inner">
   @foreach ($product as $item)
   <div class="carousel-item {{$item['id']==1?'active':''}}">
     <a href="detail/{{$item['id']}}">
     <img class="slider-img" src="{{$item['image']}}">
      <div class="carousel-caption d-none d-md-block slider-text">
        <h5>{{$item['title']}}</h5>
        <p>{{$item['description']}}</p>
     </a>
      </div>
    </div>
   @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="trending-wrapper">
  <h3 class="trending-heading">trending products</h3>
  @foreach ($product as $item)
   <div class="tending-item">
     <a href="detail/{{$item['id']}}">
     <img class="trending-image" src="{{$item['image']}}">
      <div class="">
        <h5>{{$item['title']}}</h5>
      </div>
     </a>
    </div>
   @endforeach
</div>
</div>
@endsection