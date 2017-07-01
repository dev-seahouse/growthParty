<?php

use Illuminate\Database\Seeder;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // precon: service provider seeder
    public function run()
    {
      $serviceProviders = \App\ServiceProvider::all();
      foreach ($serviceProviders as $serviceProvder)
      {
        $serviceProvder->programs()->create([
          'name' => $serviceProvder->name,
          'description'=>$serviceProvder->description
        ]);
      }
    }
}
