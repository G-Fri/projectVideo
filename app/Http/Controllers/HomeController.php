<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
	public function home()
    {
        return view('home');
    }
    public function main()
    {
        return view('main');
    }
	
	public function lessons()
    {
        return view('lessons');
    }
	
	public function account()
    {
        return view('account');
    }
	
	public function live()
    {
        return view('live');
    }
}
