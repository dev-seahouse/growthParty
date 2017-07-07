<?php

namespace App\Http\Controllers;

use Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Programs\Program;
use App\ServiceProvider;
use App\Materials;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(array('auth','notSetup'));
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
        DebugBar::info($programsOfUser);
        return view('dashboard.index', compact('user', 'programsOfUser'));
    }
}
