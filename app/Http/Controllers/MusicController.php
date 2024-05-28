<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function new_music(Request $request)
    {
        dd($request->all());
    }
}
