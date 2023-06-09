<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\Date;
class DateController extends Controller
{
    function adduser(Request $req)
    {
        $user=new Date;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password =Hash::make($req->password);
        $user->birth_day  = date("Y-m-d", strtotime($req->birth_day));
        $user->save();
        return  redirect('/');
    }

    function showdate()
    {
      $data=Date::get();
      return view('showdate',compact('data'));
    }
}
