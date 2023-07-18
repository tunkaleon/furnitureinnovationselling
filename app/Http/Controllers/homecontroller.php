<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\product;
use App\Models\cart;
use App\Models\order;
use App\Models\comment;
use App\Models\category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;





class homecontroller extends Controller
{
    //
    public function index()
    {
        $data = Product::all();
        // dd($data);
       
        return view('welcome', ['data'=>$data]);
    }
    
    public function register11(){
    return view('register');
    }
    public function register(Request $request){
      
      $this->validate($request,[
        'name'=>'required',
        'email'=>'required|email', 
        'phone'=>'required',
        'address'=>'required',
       'password'=>'required|confirmed',
      ]);
      $users = User::where('email', $request->email)->count();

      if ($users > 0) {
          return redirect()->back()->with('status', 'Email already exists');
      } else {

        $data=new User;
        $data->name=$request->name;
        $data->email=$request->email; 
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->password=$request->password;
          $data->save();

          // $users = auth()->attempt(['email'=>$request->email,'password'=>$request->password]);
          
          if(auth()->attempt($request->only('email','password'))){
           $user=auth()->user();
           if ($user->usertype == '2') {
            $data=user::all();
            $count = User::where('usertype', 1)->count();
            $client = User::where('usertype', 0)->count();
            return view('superadmin.admin_index',compact('data','count','client'));
          
        } elseif ($user->usertype == '1') {
          $id=Auth::user()->id;
        $data = Order::where('owner_id', '=', $id)
        ->where('payment_stutus', '=', 'proccessing')
        ->count();
        $payed = Order::where('owner_id', '=', $id)
        ->where('payment_stutus', '=', 'payed')
        ->count();
        $price = Order::where('owner_id', '=', $id)
        ->where('payment_stutus', '=', 'payed')
        ->sum('price');
            return view('user.user_index',compact('data','payed','price'));
        }

        else{
          $data=product::all();
          return view('welcome',compact('data'));
        }
      }
  }}
  public function logout()
{
  $data=product::all();
  auth()->logout();
  return view('welcome',compact('data'));
}  public function login(Request $request){
    //  dd($request->only('email','password'));
    if(auth()->attempt($request->only('email','password'))){
      
      $user=auth()->user();
      // dd( $user);
      if ($user->usertype == '2') {
        
        $data=user::all();
        $count = User::where('usertype', 1)->count();
        $client = User::where('usertype', 0)->count();
        return view('superadmin.admin_index',compact('data','count','client'));

   } elseif ($user->usertype == '1') {

      $id=Auth::user()->id;
        $data = Order::where('owner_id', '=', $id)
        ->where('payment_stutus', '=', 'proccessing')
        ->count();
        $payed = Order::where('owner_id', '=', $id)
        ->where('payment_stutus', '=', 'payed')
        ->count();
        $price = Order::where('owner_id', '=', $id)
        ->where('payment_stutus', '=', 'payed')
        ->sum('price');
            return view('user.user_index',compact('data','payed','price'));
   }
    else{
      $data=product::all();
      return view('welcome',compact('data'));
    }
  }else{
    $data=product::all();
    return view('welcome',compact('data'));
  }

}
  public function superadmin(){
    return view('superadmin.admin_index');
  }
  public function product_details($id){
   $product=product::find($id);
   $data = product::limit(3)->get();
    return view('product_detail',compact('product','data'));
  }
  public function add_cart(Request $request, $id){
    if(Auth::id()){

        $user=Auth::user();

        $product=product::find($id);

        $cart=new cart;
        $cart->product_name=$product->product_name;
        $cart->price=$product->price;
        $cart->product_id=$product->id;
        $cart->client_name=$user->name;
        $cart->email=$user->email;
        $cart->phone=$user->phone;
        $cart->address=$user->address;
        $cart->user_id=$user->id;
        $cart->owner_id=$product->owner_id;
        $cart->quantity=$request->value;
        $cart->image=$product->image;

        $cart->save();
        $id=Auth::user()->id;
        $cart=cart::where('user_id','=' ,$id)->get();
        return view('cart',['cart'=>$cart]);

    }
    else{
      $data=product::all();
      return view('welcome',compact('data'));
    }
  
}

public function cart(){
  $id=Auth::user()->id;
  $cart=cart::where('user_id','=' ,$id)->get();
  return view('cart',['cart'=>$cart]);
}
public function remove_cart($id){
  $cart=cart::find($id);
  $cart->delete();
  return redirect()->back();
}
public function cash_order(){
  $id=Auth::user();
  $user_id=$id->id;
  $data=cart::where('user_id','=',$user_id)->get();

  foreach ($data as $data) {

     $order=new order;
     $order->product_name=$data->product_name;
     $order->price=$data->price;
     $order->quantity=$data->quantity;
     $order->client_name=$data->client_name;
     $order->email=$data->email;
     $order->phone=$data->phone;
     $order->address=$data->address;
     $order->product_id=$data->product_id;
     $order->user_id=$data->user_id;
     $order->owner_id=$data->owner_id;
     $order->product_name=$data->product_name;
     $order->payment_stutus='proccessing';
     $order->save();

     $cart_id=$data->id;
     $cart=cart::find($cart_id);
     $cart->delete();

     $product_id=$data->product_id;
     $product=product::find($product_id);
     $dd=$product->quantity;
     $dt=$data->quantity;
     $tt=0;
     $tt=$dd-$dt;
     $product->quantity=$tt;
     $product->save();
    //  if($product->quantity=='0'){
    //   $product->delete();
    //  }
     

    


  }
  return redirect()->back()->with('message','we have received your order! you will receive your product soon Thank you for shoping with us ');
}
public function searchdata(Request $request){
  $search=$request->search;
  $data=product::where('product_name','LIKE',"%$search%")->get();
  return view('welcome',compact('data'));
}
public function about(){
  $data=product::all();
  return view('about', ['data'=>$data]);
}
public function services(){
  return view('services');
}
public function categories(){
  $data=product::all();
  $cat=category::all();
  return view('viewcategory',compact('data','cat'));
}
// public function viewcategory1($category){
//   if(product::where('category',$category)->exists())
//   {
//     $category=product::where('category',$category)->get();
//     return view('view_category');
//   }
//   else{
   // return redirect()->with('stutus','category is not available in now!!');
//   }
// }
public function view_category(){
  return view('viewcategory');

}
public function products(){
  $data=product::all();
  return view('products',compact('data'));

}
public function comment(Request $request){
  $data = product::all();
  $data2 = new comment;
  $data2->names = $request->name;
  $data2->email = $request->email;
  $data2->phone = $request->phone;
  $data2->message = $request->message;
  $data2->save();
  return view('welcome',compact('data'));
  
}
public function viewcategories($cat){
 if(category::where('name',$cat)->exists()){
  $category = category::where('name',$cat)->first();
  $data = product::where('cat_id', $category->id)->get();
  return view('categorypage',compact('category', 'data'));
 }
 else{
  return redirect('/')->with('status','that Category does not exist');
 }
}

}