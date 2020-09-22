<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use \App\Tweets;

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
        $foto_profil = DB::table('users')->first();
        return view('home', compact('foto_profil'));
    }

    public function getData()
    {
        $t = Tweets::All();
        return response()->json($t);
    }

}
