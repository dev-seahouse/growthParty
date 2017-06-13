<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Exception\RequestExceptionInterface;

class SetupController extends Controller
{
  public function __construct()
  {
    $this->middleware(array('auth'));
  }
  
  public function index()
  {
    return view('welcome.setup');
  }
  
  public function uploadProfilePic(Request $request)
  {
    return "hello";
  }
}
