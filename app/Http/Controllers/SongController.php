<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Song;



class SongController extends Controller
{
    // a method to create a new song
    public function create(Request $request)
    {
        $artist = $request['artist'];
        $mysong = $request['song'];
        $genre = $request['genre'];
        
        $song = new Song();
        $song->artist=$artist;
        $song->song=$mysong;
        $song->genre=$genre;
        
        $song->save();
        
        return redirect()->back();
        
    }
    
    // a method to show all the songs
    public function show()
    {
        $songs = DB::table('songs')->get();
        return view('song',['songs'=>$songs]);

    }
    
}
