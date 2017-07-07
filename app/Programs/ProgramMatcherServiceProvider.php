<?php

namespace App\Programs;

use Illuminate\Support\ServiceProvider;

class ProgramMatcherServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot()
  {
  }

  /**
   * Register the application services.
   *
   * @return void
   */
  public function register()
  {
    $this->app->singleton(
      ProgramMatcherImpl::class, function ($app) {
      return new ProgramMatcherImpl();
    });

    $this->app->bind(
      ProgramMatcher::class,
      ProgramMatcherImpl::class
    );
  }
}
