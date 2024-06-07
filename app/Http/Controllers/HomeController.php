<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;
use App\Models\Like;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tracks = Track::where('user_id', Auth::user()->id)->get();
        return view('home', ['tracks' => $tracks]);
    }

    public function main()
    {
        $random_traks = Track::with(['user'])->inRandomOrder()->get();
        $liked = Like::with(['user', 'track'])->where('user_id', Auth::user()->id)->get();
        return view('mainPage', ['likes' => $liked, 'random_traks' => $random_traks]);    
    }
}
