<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Models\Tada;

class TdController extends Controller
{
     function insert(Request $req)
     {
        foreach ($req -> field_name as $key=>$insert){
          $saverecord =[
            'field_name'=>$req->field_name[$key],
            // 'created_at' => Carbon::now(),
            // 'updated_at' => Carbon::now()

          ];
          DB::table("tadas")->insert($saverecord);
        }
        return redirect('/');
      }

}