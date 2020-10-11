<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\BackendController as Controller;

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
        $bcrum = $this->bcrum('Home');
        return view('backend.home', compact('bcrum'));
    }
}
