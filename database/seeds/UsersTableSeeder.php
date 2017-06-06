<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->makeTestUsers();
    }

    protected function makeTestUsers()
    {
      DB::table('users')->insert([
        'email' => "test@mail.com",
        'password' => bcrypt('test'),
        'mobile' => 87878787
      ]);
    }
}
