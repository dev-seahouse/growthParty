<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetupController extends Controller
{
  public function __construct()
  {
    $this->middleware(array('auth','isSetup'));
  }
  
  public function index()
  {
    return view('welcome.setup');
  }
}
