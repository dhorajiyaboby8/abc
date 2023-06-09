<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Selectpicker;
use Illuminate\Support\Facades\Hash;
class pickerController extends Controller
{
    function selectpicker(Request $req)
    {
        $user=new Selectpicker;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password =Hash::make($req->password);
        $user->hobby = implode(',',$req->hobby);
        $user->save();
        return  redirect('showpicer');
    }
    function showdata()
    {
        $data = Selectpicker::get();
        return  view('showpicer',compact('data'));
    }
    function editselectpicker($id)
    {
        $data= Selectpicker::find($id);
        $hobby = explode(",",$data->hobby);
      
        return view('editselect',compact('data','hobby'));
    }
    function update(Request $req)
    {
        $data= Selectpicker::find($req->id);    
        $data->name=$req->name;
        $data->email=$req->email;
        $data->hobby = implode(',',$req->hobby);
        $data->save();
        return  redirect('showpicer');
    }
}
