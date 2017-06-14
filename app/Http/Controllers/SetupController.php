<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;

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
    $form_data = $request->all();
    // validate format before upload  start
    $rules = [
      'file' => 'required|mimes:png,gif,jpeg,jpg,bmp'
    ];
    $messages = [
      'file.mimes' => 'Uploaded file is not in image format',
      'file.required' => 'Image is required'
    ];
    $validator = Validator::make($form_data, $rules, $messages);
    if ($validator->fails()){
      return Response::json([
        'error' =>true,
        'message' => $validator->messages()->first(),
        'code' => 400
      ], 400);
    }

    $photo = $form_data['file'];

    $originalName = $photo->getClientOriginalName();
    $extension = $photo->getClientOriginalExtension();
    $originalNameWithoutExt = substr($originalName, 0, strlen($originalName) - strlen($extension) - 1);
    $filename = $this->sanitize($originalNameWithoutExt);

    $allowedFileName = $this->createUniqueFileName($filename, $extension);
    return "hello";
  }

  public function createUniqueFileName($filename, $extension)
  {

  }

  function sanitize($string, $force_lowercase = true, $anal = false)
  {
    $strip = array("~", "`", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "=", "+", "[", "{", "]",
      "}", "\\", "|", ";", ":", "\"", "'", "&#8216;", "&#8217;", "&#8220;", "&#8221;", "&#8211;", "&#8212;",
      "â€”", "â€“", ",", "<", ".", ">", "/", "?");
    $clean = trim(str_replace($strip, "", strip_tags($string)));
    $clean = preg_replace('/\s+/', "-", $clean);
    $clean = ($anal) ? preg_replace("/[^a-zA-Z0-9]/", "", $clean) : $clean ;
    return ($force_lowercase) ?
      (function_exists('mb_strtolower')) ?
        mb_strtolower($clean, 'UTF-8') :
        strtolower($clean) :
      $clean;
  }

  public function updateinfo(Request $request)
  {

    $user = Auth::user();
    if ($request->hasFile('avatar')) {

      $file = $request->file('avatar');
      $path = $file->hashName('avatars');
      // avatars/bf5db5c75904dac712aea27d45320403.jpeg

      $image = Image::make($file);
      $image->fit(300, 300, function ($constraint) {
        $constraint->aspectRatio();
      });
      Storage::disk('public')->put($path, (string)$image->encode());

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
