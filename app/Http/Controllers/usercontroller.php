<?php

namespace App\Http\Controllers;
use Faker\Provider\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\order;
use App\Models\user;
use App\Models\category;
class usercontroller extends Controller
{
    //
    public function userindex(){
      
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

    public function viewpage(){
        $data=category::all();
        return view('user.addproduct2',compact('data'));
    }

    public function addproduct(Request $request){
        $user=Auth::user();

        $data=new product;

        $data->product_name=$request->pname;
        $data->description=$request->description; 
        $data->more_description=$request->moredescription; 
        $data->quantity=$request->quantity;
        $data->price=$request->price;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('img',$imagename);
        $data->image=$imagename;
        $data->owner_name=$user->name;
        $data->email=$user->email;
        $data->owner_id=$user->id;
        $data->phone=$user->phone;
        $data->address=$user->address;
        $data->category=$request->category;

          $data->save();
          $id=Auth::user()->id;
          $data=product::where('owner_id','=' ,$id)->get();
          return redirect()->back();
    }
    public function view_product(){
        $id=Auth::user()->id;
        $data=product::where('owner_id','=' ,$id)->get();
        return view('user.show_product',['product'=>$data],compact('data'));
    }
    public function pedding_order(){
        $id=Auth::user()->id;
        $data = Order::where('owner_id', '=', $id)
        ->where('payment_stutus', '=', 'proccessing')
        ->get();
        return view('user.pedding_order',['order'=>$data],compact('data'));
    }
    public function delivered(){
        $id=Auth::user()->id;
        $data = Order::where('owner_id', '=', $id)
        ->where('payment_stutus', '=', 'payed')
        ->get();
        return view('user.delivered',['order'=>$data],compact('data'));
    }
    public function check($id){
        $order=order::find($id);
        $order->payment_stutus="payed";
        $order->save();
        return redirect()->back();
    }
    public function delete_product($id){
        $cart=product::find($id);
        $cart->delete();
        return redirect()->back();
    }
    public function showupdate($id){
        $data=product::find($id);
        return view('user.editproduct',compact('data'));
    }
    public function update(Request $request, $id){
        $data = product::find($id);
        $data->product_name = $request->pname;
        $data->description = $request->description;
        $data->more_description = $request->moredescription;
        $data->quantity = $request->quantity;
        $data->price = $request->price;

        $image=$request->image;
        
        // $imagename=time().'.'.$image->getClientOriginalExtension();
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('img',$imagename);
        $data->image=$imagename;

         
        $data->save();

        $id=Auth::user()->id;
        $data=product::where('owner_id','=' ,$id)->get();
        return view('user.show_product',['product'=>$data],compact('data'));
       
    }
    public function account(){
       

        return view('user.account');
    }
    public function updatestore(){
        $id=Auth::user()->id;
        $store= Product::where('owner_id','=',$id)->groupBy('product_name')
        ->select('product_name', DB::raw('SUM(quantity) as total_quantity'), DB::raw('SUM(price) as total_price'))
        ->get();
        
        return view('user.updatestore',compact('store'));
    }
}
