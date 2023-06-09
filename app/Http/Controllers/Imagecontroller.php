<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\File; 
use Illuminate\Http\Request;
use App\Models\ImageUpload;
class Imagecontroller extends Controller
{
    function showimage()
    {
      $data=ImageUpload::get();
      return view('showimage',compact('data'));
    }
    public function insert(Request $req)
    { 
        $files = [];
        if($req->filename)
        {
            foreach($req->file('filename') as $file)
                {
                    $name = time().rand(1,100).'.'.$file->extension();
                    $file->move(public_path('files'), $name);  
                    $files[] = $name; 
                }
        }  
        $user=new ImageUpload;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->filename = implode( ',',$files);
        $user->save();
        return  redirect('showimage');
    }
    function showeditimage($id)
    {
        $image = ImageUpload::find($id);
        return  view('editimage',compact('image'));
    }
    function update(Request $req)
    {
        $data= ImageUpload::find($req->id);    
        $data->name=$req->name;
        $data->email=$req->email;
        $files = [];
        if($req->filename)
            {
                foreach($req->file('filename') as $file)
                    {
                        $name = time().rand(1,100).'.'.$file->extension();
                        $file->move(public_path('files'), $name);  
                        $files[] = $name; 
                    }
            }  
        $data->filename = implode( ',',$files);
        $data->save();
        return  redirect('showimage');
    }
    public function deleteimage($id)
    {
        $data= ImageUpload::find($id);
        $data->delete();
        return  redirect('showimage');
    }
}
