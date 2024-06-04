<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;
use Illuminate\Support\Facades\Auth;

class MusicController extends Controller
{
    public function new_music(Request $request)
    {
        // Get the uploaded files
        $musicFile = $request->file('music');
        $coverFile = $request->file('cover');

        // Get the input data
        $trackName = $request->input('track_name');
        $genre = $request->input('genre');

        // Store the music file with a timestamp
        $musicPath = $musicFile->storeAs('music', time() . '.' . $musicFile->getClientOriginalExtension(), 'public');

        // Store the cover image with a timestamp
        $coverPath = $coverFile->storeAs('covers', time() . '.' . $coverFile->getClientOriginalExtension(), 'public');

        $track = [
            'user_id' => Auth::user()->id,
            'name' => $trackName,
            'genre' => $genre,
            'music_file' => $musicPath,
            'cover_file' => $coverPath
        ];
        Track::create($track);
        
        return redirect()->back();
    }
}
