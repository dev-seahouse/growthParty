<?php

namespace App\Http\Controllers;

use App\Exceptions\ProfilePicUploadException;
use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;

class SetupController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    return view('welcome.setup');
  }

  public function uploadProfilePic(Request $request)
  {
    $form_data = $request->all();
    $validator = $this->makeValidator($form_data);
    if ($validator->fails()) {throw new ProfilePicUploadException($validator->messages()->first());}
    $photo = $form_data['avatar'];
    $extension = $photo->getClientOriginalExtension();
    $fileName = User::$profilePicName;
    $imgPath = $this->makeImagePath($fileName, $extension);
    $profilePic = $this->makeProfilePic($photo);
    
    return "hello";
  }

  public function makeImagePath($filename, $extension)
  {
    $user = Auth::user();
    $userId = $user->id;
    $userImgFolderUrl = asset('storage/user/');
    $userImgPath = $userImgFolderUrl . "/{$userId}/" . $filename . '.' . $extension;
    return $userImgPath;
  }

  public function updateinfo(Request $request)
  {

    $user = Auth::user();
/*    if ($request->hasFile('avatar')) {

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
    }*/

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

  /**
   * @param $form_data
   * @return \Illuminate\Validation\Validator
   */
  protected function makeValidator($form_data)
  {
    $rules = [
      'avatar' => 'required|mimes:png,gif,jpeg,jpg,bmp'
    ];
    $messages = [
      'file.mimes' => 'Uploaded file is not in image format',
      'file.required' => 'Image is required'
    ];
    $validator = Validator::make($form_data, $rules, $messages);
    return $validator;
  }

  protected function makeProfilePic($photo)
  {
    $image = Image::make($photo);
    return $image;
  }
}
