<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(IndustriesTableSeeder::class);
      $this->call(OccupationSeeder::class);
      $this->call(ServiceProviderSeeder::class);
      $this->call(ProgramTemplateSeeder::class);
      $this->call(ProgramsTableSeeder::class);

      // blog seeders
      $this->call(VoyagerDatabaseSeeder::class);
      $this->call(UsersTableSeeder::class);
      $this->call(VoyagerDummyDatabaseSeeder::class);
    }
}
