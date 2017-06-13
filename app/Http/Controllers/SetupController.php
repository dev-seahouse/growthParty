<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

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
  
  public function updateinfo(Request $request){
    
    $user = Auth::user();
    if($request->hasFile('avatar')){
      
      $file = $request->file('avatar');
      $path = $file->hashName('avatars');
      // avatars/bf5db5c75904dac712aea27d45320403.jpeg
      
      $image = Image::make($file);
      $image->fit(300, 300, function ($constraint) {
        $constraint->aspectRatio();
      });
      Storage::disk('public')->put($path, (string) $image->encode());
      
      //Save to users table
      $user = Auth::user();
      $user->avatar = $path;
      $user->save();
    }
    
    //Save to users table
    $user = Auth::user();
    $user->name = $request->input('name');
    $user->occupation = $request->input('occupation');
    $user->is_setup = 1;
    $user->save();
   //respone->back()
    // validate image format is only png or jepeg
    // validate file size
    // if succesfully saved and successfully updated info, redirect to dashboard
    // else return error page view('errors.something');
    return view('welcome.dashboard');
  }
}
