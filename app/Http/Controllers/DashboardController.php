<?php

namespace App\Http\Controllers;

use App\Materials;
use App\Programs\ProgramAssigner;
use App\Programs\ProgramMatcher;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @param ProgramMatcher $matcher
   */
  private $programAssigner;

  public function __construct()
  {
    $this->middleware(array('auth', 'notSetup'));
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $programsOfUser = Auth::user()->programs;
    return view('dashboard.index', compact('user', 'programsOfUser'));
  }
}
