<?php

namespace App\Http\Controllers\Voyager;
use Artisan;

class VoyagerCacheController {

  public function destroy()
  {
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('responsecache:flush');
    return back();
  }
}