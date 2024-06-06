<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;

class TrackController extends Controller
{
    public function show_track($id)
    {
        $track = Track::where('id', $id)->first();
        return view('showTrackPage', ['track' => $track]);
    }
}
