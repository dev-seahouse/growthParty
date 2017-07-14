<?php

use Illuminate\Database\Seeder;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $serviceProviders = \App\ServiceProvider::all();
      foreach ($serviceProviders as $serviceProvider){
        $serviceProvider->ratings()->create(array());
      }
    }
}
