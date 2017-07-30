<?php

namespace App\Http\Controllers;

use App\Materials;
use App\Programs\ProgramAssigner;
use App\Programs\ProgramMatcher;
use Illuminate\Support\Facades\Auth;

// I'm very sorry that this class should really be called
// Programs controller and the corresponding view should be
// named ProgramsView, because i am lazy i did not change 
// - Xin Kenan
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
    $user = Auth::user();
    $programsOfUser = $user->programs;
    return view('dashboard.index', compact('user', 'programsOfUser'));
  }
}
