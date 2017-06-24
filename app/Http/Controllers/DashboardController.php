<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(array('auth','isSetup'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $programsOfUser = $user->programs;
        $serviceProvider = $programsOfUser->first()->serviceProvider;

        return view('welcome/dashboard', compact('user', 'programsOfUser', 'serviceProvider'));
    }
}
