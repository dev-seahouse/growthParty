<?php
namespace Tests\Traits;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Testing\DatabaseMigrations;

trait CustomDatabaseMigration
{
  use DatabaseMigrations;
  public function runDatabaseMigrations()
  {
    $this->artisan('migrate');
    $this->artisan('migrate',['--path'=>'/database/migrations/test_only']);
    $this->artisan('db:seed');

    $this->app[Kernel::class]->setArtisan(null);

    $this->beforeApplicationDestroyed(function () {
      $this->artisan('migrate:rollback',['--path'=>'/database/migrations/test_only']);
      $this->artisan('migrate:rollback');
    });
  }
}