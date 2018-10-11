<?php

namespace Training_Management_System\Http\Controllers;

use Illuminate\Http\Request;
use Training_Management_System\Training;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trajnimet = Training::latest()->get();

        return view('welcome', compact('trajnimet'));
    }
}
