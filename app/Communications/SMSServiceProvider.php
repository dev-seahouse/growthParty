<?php

namespace App\Communications;

use Debugbar;
use Illuminate\Support\ServiceProvider;
use Twilio\Rest\Client;

class SMSServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot()
  {
    //
  }

  /**
   * Register the application services.
   *
   * @return void
   */
  public function register()
  {
    $this->app->singleton('Twilio\Rest\Client', function ($app) {
      $config = \Config::get('services.twilo');
      DebugBar::info($config);
      return new Client($config['key'], $config['secret']);
    });

    $this->app->bind(
      'App\Communications\Otp',
      'App\Communications\TwiloOtp'
    );

  }
}
