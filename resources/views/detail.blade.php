
@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src = "{{$product['image']}}">
         </div>
         <div class="col-sm-6">
             <a href="/">Go Back</a>
             <br>
            <h2>{{$product['title']}}</h2>
            <br>
            <h3>Price : {{$product['price']}}</h3>
            <br>
            <h4>Details : {{$product['description']}}</h4>
            <br>
            <h4>Category : {{$product['category']}}</h4>
            <br><br>
            <form action="{{url('add_to_cart')}}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
          <button class="btn btn-primary">Add to Cart</button>
          </form>
<br><br>

         </div>

</div>
@endsection