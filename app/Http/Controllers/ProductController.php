<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Http;
use Session;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    function index()
    {
      $data= Http::get("https://fakestoreapi.com/products")->collect();
      return view('products',['product'=>$data]);
    }
    function detail($id)
    {

        $data=Product::find($id);
        return view('detail',['product'=>$data]);
        
    }
    function search(Request $req)
    {
         $data=Product::
         where('title', 'like' , '%' .$req->input('result').'%')
         ->get();
         return view('search',['products'=>$data]);
    }

    function addToCart(Request $req)
    {

        if($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id= $req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');

        }
        else{
            return redirect('/login');
        }
    }

    public function cartItem()
    {
        $userid=Session::get('user')['id'];
        return Cart::where('user_id',$userid)->count();
    }

    function cartList()
    {
        $user=Session::get('user')['id'];
        $products=DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$user)
        ->select('products.*','carts.id as cart_id')->get();

        return view('cartlist',['products'=>$products]);
    }
      function removeCart($id)
      {
          Cart::destroy($id);
          return redirect('cartlist');
      }

      function orderNow()
      {

        $user=Session::get('user')['id'];
        $total=$products=DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$user)
        ->sum('products.price');

        return view('ordernow',['total'=>$total]);

      }
      function orderPlace(Request $req)
      {
          
        $userid=Session::get('user')['id'];
        $allcart=Cart::where('user_id',$userid)->get();
        foreach($allcart as $cart)
        { 
           $order= new Order;
           $order->product_id=$cart['product_id'];
           $order->user_id=$cart['user_id'];
           $order->status="pending";
           $order->payment_method=$req->payment;
           $order->payment_status="pending";
           $order->address=$req->address;
           $order->save();
           Cart::where('user_id',$userid)->delete();
      }
      $req->input();
        return redirect('/');
}

function orderList()
{
    $user=Session::get('user')['id'];
          $orderlist=DB::table('orders')
          ->join('products','orders.product_id','=','products.id')
          ->where('orders.user_id',$user)
          ->get();

        return view('orderlist',['orderlist'=>$orderlist]);
}
}
