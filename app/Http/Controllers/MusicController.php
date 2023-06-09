<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;
class MusicController extends Controller
{
    function indexmusic()
    {
        return view("indexmusic");
    }
    function fetchmusic()
    {
       $data=Music::get();
       return view('musics',compact('data'));
    }

    function insertmusic(Request $request)
    {
       $request->validate([
        'audio' =>'nullable|file|mimes:audio/mpeg,mpga,mp3,wav,aac'
       ]);
       $file=$request->file('audio');
       $file->move('audiomusic',$file->getClientOriginalName());
       $file_name=$file->getClientOriginalName();
       $insert=new Music();
       $insert->singername=$request->singername;
       $insert->movie=$request->movie;
       $insert->song = $file_name;
       $insert->songtype=$request->songtype;
       $insert->songname=$request->songname;
       $insert->save();
       return redirect('/fetch_music');
    }
    public function deletemusic($id)
    {
      $data= Music::find($id);
      $data->delete();
      return  redirect('/fetch_music');
    }
}



