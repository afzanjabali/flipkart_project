@extends('master')
@section("content")
 <div class="">

<div class="col-sm-12">
<h3 class="cart-heading">cart list</h3>
<a class="btn btn-success order-now" href="ordernow">order now</a>
  @foreach ($products as $item)
   <div class="row cart-list">
  <div class="col-sm-3">
     <img class="trending-image" src="{{$item->image}}">
     </a>
    </div>
     <div class="col-sm-3">
     <a href="detail/{{$item->id}}">
      <div class="">
        <h5>{{$item->title}}</h5>
        <h5>{{$item->description}}</h5>
      </div>
     </a>
     </div> 
     <div class="col-sm-3">
      <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">remove to cart</a>
      </div>
     </a>
     </div>
    </div>
   @endforeach
</div>
</div>
 @endsection