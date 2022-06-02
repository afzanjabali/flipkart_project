<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});

route::get('/logout',function()
{
    Session::forget('user');
    return redirect('login');
});

Route::view('/register','register');
route::post("/login",[UserController::class,'login']);
route::get("/",[ProductController::class,'index']);
Route::post("register", [UserController::class,'register']);
route::get("/detail/{id}",[ProductController::class,'detail']);
route::get("/search",[ProductController::class,'search']);
route::post("/add_to_cart",[ProductController::class,'addToCart']);
route::get("/cartlist",[ProductController::class,'cartList']);
route::get("removecart/{id}",[ProductController::class,'removeCart']);
route::get("ordernow",[ProductController::class,'orderNow']);
route::post("orderplace",[ProductController::class,'orderPlace']);
route::get("orderlist",[ProductController::class,'orderList']);











