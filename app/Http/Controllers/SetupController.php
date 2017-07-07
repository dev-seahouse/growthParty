<?php

namespace App\Http\Controllers;

use App\Exceptions\ProfilePicUploadException;
use App\Occupation;
use App\Programs\ProgramAssigner;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class SetupController extends Controller
{
  private $programAssigner;

  public function __construct(ProgramAssigner $assigner)
  {
    $this->middleware(['auth', 'setup']);
    $this->programAssigner = $assigner;
  }

  public function index()
  {
    $occupations = Occupation::all();
    return view('welcome.setup')->with(compact('occupations'));
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'name'       => 'required|max:50',
      'occupation' => 'required|max:50',
    ]);
    $user = Auth::user();
    $user->name = $request->input('name');
    $occupationId = $user->occupation_id = $request->input('occupation');
    $user->industry_id = Occupation::find($occupationId)->industry_id;
    $user->is_setup = 1;
    $user->save();
    $this->programAssigner->assign($user);
    return redirect('/dashboard');
  }

  public function uploadProfilePic(Request $request)
  {
    $form_data = $request->all();
    $this->validateRequest($form_data);
    $photo = $form_data['avatar'];
    $originalName = $photo->getClientOriginalName();
    $extension = $photo->getClientOriginalExtension();

    $profilePicPath = $this->createImagePath(User::$profilePicFileName, $extension);
    $smallProfilePicPath = $this->createImagePath(User::$smallProfilePicFileName, $extension);

    $profilePic = $this->makeProfilePic($photo);
    $avatar = $this->makeAvatar($photo);

    $saveResultOfProfilePic = $profilePic->save($profilePicPath);
    $saveResultOfAvatar = $avatar->save($smallProfilePicPath);

    if (!($saveResultOfAvatar || $saveResultOfProfilePic)) {
      throw new ProfilePicUploadException("Server error while uploading", 500);
    }

    Auth::user()->avatar = $smallProfilePicPath;
    Auth::user()->save();

    return Response::json([
      'error' => false,
      'code'  => 200
    ], 200);
  }

  public function removeUploadedImages()
  {
    $user = Auth::user();
    $extension = pathinfo($user->avatar, PATHINFO_EXTENSION);

    $profilePicPath = $this->getImgPath(User::$profilePicFileName, $extension);
    $avatarPath = $this->getImgPath(User::$smallProfilePicFileName, $extension);
    Storage::disk('public')->delete([$profilePicPath, $avatarPath]);

    return Response::json([
      'error' => false,
      'code'  => 200
    ], 200);
  }

  protected function validateRequest($form_data)
  {
    $validator = $this->makeValidator($form_data);
    if ($validator->fails()) {
      throw new ProfilePicUploadException($validator->messages()->first(), 400);
    }
  }

  protected function makeValidator($form_data)
  {
    $rules = [
      'avatar' => 'required|mimes:png,gif,jpeg,jpg,bmp'
    ];
    $messages = [
      'file.mimes'    => 'Uploaded file is not in image format',
      'file.required' => 'Image is required'
    ];
    $validator = Validator::make($form_data, $rules, $messages);
    return $validator;
  }

  public function createImagePath($filename, $extension)
  {
    $storagePath = Auth::user()->getStoragePath();
    $userImgPath = $this->getImgPath($filename, $extension);
    Storage::disk('public')->makeDirectory($storagePath);
    return "storage" . $userImgPath;
  }

  protected function getImgPath($filename, $extension)
  {
    $storagePath = Auth::user()->getStoragePath();
    $userImgPath = $storagePath . $filename . '.' . $extension;
    return $userImgPath;
  }

  protected function makeProfilePic($photo)
  {
    $image = Image::make($photo);
    return $image;
  }

  protected function makeAvatar($photo)
  {
    $image = Image::make($photo)->resize(300, null, function ($constraint) {
      $constraint->aspectRatio();
    });
    return $image;
  }

}
