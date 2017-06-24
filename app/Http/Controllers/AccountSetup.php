<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Image;


class AccountSetup extends Controller
{

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('welcome.setup');
    }

    public function updateinfo(Request $request){

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

    	return view('welcome.setup');
    }
}
