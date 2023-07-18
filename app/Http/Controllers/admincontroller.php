<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\category;

class admincontroller extends Controller
{
    //
    public function admin_index1 (){

        $data=user::all();
      

        $data=user::all();
        $count = User::where('usertype', 1)->count();
        $client = User::where('usertype', 0)->count();
        return view('superadmin.admin_index',compact('data','count','client'));
    }
public function adduser12(){
    $data=user::all();
    return view('superadmin.adduser',compact('data'));
}
public function showpage(){
    return view('superadmin.addproduct');
}
public function categorypage(){
    $data = category::all();
    return view('superadmin.furniture_category',compact('data'));
}
public function deletecategory($id){
    $data = category::find($id);
    $data->delete();
    return redirect()->back();
}
public function editcategory($id){
    $data=category::find($id);
    return view('superadmin.edit_category',compact('data'));
}
public function updatecategory(request $request,$id){
    $data=category::all();
    $cat=category::find($id);
    $cat->name = $request->name;

    if ($request->hasFile('image')) {
        $uploadedFile = $request->file('image');
        $imageName = time() . '.' . $uploadedFile->getClientOriginalExtension();
        $uploadedFile->move('img', $imageName);
        $cat->image = $imageName;
    }
    $cat->save();
    return view('superadmin.furniture_category',compact('data'));
}
public function addcategory(Request $request){
    $data=new category;
    $data->name=$request->name;
    $image=$request->image;
    $imagename=time().'.'.$image->getClientOriginalExtension();
    $request->image->move('img',$imagename);
    $data->image=$imagename;
    $data->save();
    return redirect()->back();
}
public function adduser(Request $request){
    
    $data=new User;
    $data->name=$request->name;
    $data->email=$request->email; 
    $data->phone=$request->phone;
    $data->address=$request->address;
    $data->password=$request->password;
      $data->save();
      return redirect()->back();
}
public function alluser(){
    $data=user::all();
    return view('superadmin.alluser',compact('data'));
}
public function delete_user($id){
    $user=user::find($id);
    $user->delete();
    return redirect()->back();
}
public function edit_user($id){
    $user=user::find($id);
    return view('superadmin.edit_user',compact('user'));
}
public function update(Request $request,$id){
    $data=user::all();
    $user=user::find($id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->usertype = $request->usertype;
    $user->save();
    return view('superadmin.alluser',compact('data'));

}

}
