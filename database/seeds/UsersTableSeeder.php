<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            $adminRole = Role::where('name', 'admin')->firstOrFail();
            $userRole = Role::where('name', 'user')->firstOrFail();
            
            User::create([
                'name'           => 'Admin',
                'email'          => 'marcus@growthparty.co',
                'mobile'         => "90668301",
                'password'       => bcrypt('password'),
                'remember_token' => str_random(60),
                'role_id'        => $adminRole->id,
            ]);

            DB::table('users')->insert([
                'email' => "test@mail.com",
                'password' => bcrypt('password'),
                'mobile' => 87878787,
                'remember_token' => str_random(60),
                'role_id' => $userRole->id
            ]);


        }
    }
}
