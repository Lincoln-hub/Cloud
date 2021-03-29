<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Song;
use App\Services\Utility\MyLogger;
use App\Services\Utility\MyLogger2;



class SongController extends Controller
{
    
    // a method to create a new song
    public function create(Request $request)
    {
        MyLogger2::info("Entering the create() function in the song controller! ");
        MyLogger::info("Entering the create() function in the song controller! ");
        $artist = $request['artist'];
        $mysong = $request['song'];
        $genre = $request['genre'];
        
        $song = new Song();
        $song->artist=$artist;
        $song->song=$mysong;
        $song->genre=$genre;
        
        $song->save();
        MyLogger2::info("Exiting the create() function in the song controller! ");
        MyLogger::info("Exiting the create() function in the song controller! ");
        return redirect()->back();
        
    }
    
    // a method to show all the songs
    public function show()
    {
        MyLogger2::info("Entering the Show() function in the song controller! ");
        MyLogger::info("Entering the Show() function in the song controller! ");
        $songs = DB::table('songs')->get();
        MyLogger::info("Exiting the Show() function in the song controller! ");
        MyLogger2::info("Exiting the Show() function in the song controller! ");
        return view('song',['songs'=>$songs]);

    }
    
}
