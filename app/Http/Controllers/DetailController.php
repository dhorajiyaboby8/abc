<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Detail;

class DetailController extends Controller
{
    function data(Request $req)
    {
        $validate = Validator::make($req->all(), [
          'name' => 'required',
          'email' => 'required',
          'hobby' => 'required',
      ],[
          'name.required' => 'name is required.',
          'email.required' => 'email is required.',
          'hobby.required' => 'hobby is required.',
      ]);
      if($validate->fails())
          {
              return back()->withErrors($validate->errors())->withInput();
          }
          $data=new Detail();
        $data->name=$req->name;
        $data->email=$req->email;
        $data->hobby = implode( ',',$req->hobby);
        $data->save();
        return  redirect('showdetail');
     }

     function showdata()
    {
      $data=Detail::get();
      return view('showdetail',compact('data'));
    }

    function editshowdata($id)
    {
        $data= Detail::find($id);
        $hobby = explode(",",$data->hobby);
        return view('editdetail',compact('data','hobby'));
    }

    function updatedetail(Request $req)
    {
      $validate = Validator::make($req->all(), [
        'name' => 'required',
        'email' => 'required',
        'hobby' => 'required',
    ],[
        'name.required' => 'name is required.',
        'email.required' => 'email is required.',
        'hobby.required' => 'hobby is required.',
    ]);
     if($validate->fails())
        {
            return back()->withErrors($validate->errors())->withInput();
        }
        $data= Detail::find($req->id);    
        $data->name=$req->name;
        $data->email=$req->email;
        $data->hobby = implode(',',$req->hobby);
        $data->save();
        return  redirect('showdetail');
    }
    public function delete($id)
    {
      $data= Detail::find($id);
      $data->delete();
      return  redirect('showdetail');
    }
}
