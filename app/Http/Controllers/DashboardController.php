<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Program;
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
        return view('welcome/dashboard', compact('user', 'programsOfUser'));
        //$serviceProvider = $programsOfUser->first()->serviceProvider;

        //$sp = ServiceProvider::with('programs')->get();
        //return view('welcome/dashboard')->with('sP', $sp);

        //$program = $user->programs;
        //$serviceprovider = $program->serviceProvider;

        // Dump all children/products of this BaseProduct
        //dd($serviceprovider->programs->toArray());




        //return view('welcome/dashboard', compact('user', 'programsOfUser', 'serviceProvider'));
    }
}
