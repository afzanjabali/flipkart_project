@extends('master')
@section("content")
 <div class="table-height container">

<div class="col-sm-12">
<table class="table">
  <tbody>
    <tr>
      <td>Amount</td>
      <td>$ {{$total}}</td>
    </tr>
    <tr>
      <td>Tax</td>
      <td>$ 0</td>
    </tr>
    <tr>
      <td>Delivery</td>
      <td>$ 10</td>
    </tr>
    <tr>
      <td>Total Amount</td>
      <td>$ {{$total+10}}</td>
    </tr>
  </tbody>
</table>
<div>
<form action="/orderplace" method="POST">
  @csrf
  <div class="form-group">
    <textarea name="address" class="form-control"  placeholder="Enter your address"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">payment Method</label><br> <br>
    <input type="radio" value="cash" name="payment"> <span>online payment</span><br> <br>
    <input type="radio" value="cash" name="payment"> <span>EMI payment</span><br> <br>
    <input type="radio" value="cash" name="payment"> <span>payment on delivery</span><br> <br>
  </div>
  <button type="submit" class="btn btn-primary">order now</button>
</form>
</div>
</div>
</div>
 @endsection