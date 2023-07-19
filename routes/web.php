<?php

use App\Http\Controllers\homecontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// route::get('register',[homecontroller::class,'register']);
route::get('/',[homecontroller::class,'index']);
route::get('register',[homecontroller::class,'register11']);
route::post('register', [homecontroller::class,'register']);
route::post('comment',[homecontroller::class,'comment']);
route::get('login',[homecontroller::class,'loginview']);
route::post('login', [homecontroller::class,'login']);
route::get('/logout', [homecontroller::class,'logout']);
route::get('/admin_index',[admincontroller::class,'admin_index1']);
route::get('/adduser',[admincontroller::class,'adduser12']);
route::get('/user_index',[usercontroller::class,'userindex']);
route::get('/addproduct',[admincontroller::class,'showpage']);
route::get('/addproduct2',[usercontroller::class,'viewpage']);
route::post('add_product',[usercontroller::class,'addproduct'])->name('add_product');
route::get('contact',[homecontroller::class,'contacts']);
route::get('show_product',[usercontroller::class,'view_product']);
route::get('product_detail/{id}',[homecontroller::class,'product_details']);
route::post('cart/{id}',[homecontroller::class,'add_cart']);
route::get('cart/{id}',[homecontroller::class,'cart']);
route::get('/remove_cart/{id}',[homecontroller::class,'remove_cart']);
route::get('checkout',[homecontroller::class,'cash_order']);
route::get('pedding_order',[usercontroller::class,'pedding_order']);
route::get('check/{id}',[usercontroller::class,'check']);
route::get('delivered',[usercontroller::class,'delivered']);
route::get('/delete_product/{id}',[usercontroller::class,'delete_product']);
route::get('/showupdate/{id}',[usercontroller::class,'showupdate']);
route::post('updates/{id}',[usercontroller::class,'update']);
route::get('search',[homecontroller::class,'searchdata']);
route::get('about',[homecontroller::class,'about']);
route::get('services',[homecontroller::class,'services']);
route::get('categories',[homecontroller::class,'categories']);
route::get('furniturecat',[admincontroller::class,'categorypage']);
route::post('addcategory',[admincontroller::class,'addcategory']);
route::get('viewcategory/{category}',[homecontroller::class,'viewcategory1']);
route::get('viewcategory',[homecontroller::class,'view_category']);
route::get('categories/{name}',[homecontroller::class,'viewcategories']);
route::get('products',[homecontroller::class,'products']);
route::post('adduser',[admincontroller::class,'adduser']);
route::get('alluser',[admincontroller::class,'alluser']);
route::get('delete_user/{id}',[admincontroller::class,'delete_user']);
route::get('edit_user/{id}',[admincontroller::class,'edit_user']);
route::post('edituser/{id}',[admincontroller::class,'update']);
route::get('account',[usercontroller::class,'account']);
route::get('deletecategory/{id}',[admincontroller::class,'deletecategory']);
route::get('editcategory/{id}',[admincontroller::class,'editcategory']);
route::post('updatecategory/{id}',[admincontroller::class,'updatecategory']);
route::get('updatestore',[usercontroller::class,'updatestore']);
route::get('login',[homecontroller::class,'login1']);
