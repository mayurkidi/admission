<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

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
        return view('home');
    }

    public function dashboard()
    {
        $is_register=Session::get('is_register');

        if($is_register == '1' || $is_register == 1)
        {
            Session::put('is_register',null);
            \Auth::logout();
            return redirect()->route('login');
        }

        return view('home');
    }
    
}
