@extends('master')
@section("content")
 <div class="">
<div class="row">
    <div class="col-sm-4">
    <a href="#">Filter</a>
</div>
<div class="col-sm-4">
<h3 class="search-product">results for searched products</h3>
  @foreach ($products as $item)
   <div class="">
     <a href="detail/{{$item['id']}}">
     <img class="trending-image" src="{{$item['image']}}">
      <div class="">
        <h5>{{$item['name']}}</h5>
        <h5>{{$item['description']}}</h5>
      </div>
     </a>
    </div>
   @endforeach
</div>
</div>
 @endsection