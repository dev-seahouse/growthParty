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

  public function __construct(ProgramAssigner $assigner)
  {
    $this->middleware(array('auth', 'notSetup'));
    $this->programAssigner = $assigner;
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $user = Auth::user();
    $this->programAssigner->assign($user);
    $programsOfUser = $user->programs;
    return view('dashboard.index', compact('user', 'programsOfUser'));
  }
}
