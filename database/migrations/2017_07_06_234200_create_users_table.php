<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('role_id')->nullable();
			$table->string('name', 191)->nullable();
			$table->string('email', 191)->unique();
			$table->string('avatar', 191)->nullable();
			$table->string('password', 191);
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
			$table->timestamp('last_login')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('first_name', 191)->nullable();
			$table->string('last_name', 191)->nullable();
			$table->string('last_login_ip', 30)->nullable();
			$table->string('registered_ip', 30)->nullable();
			$table->boolean('is_activated')->default(0);
			$table->string('mobile', 20)->default('')->unique();
			$table->boolean('is_setup')->default(0);
			$table->integer('occupation_id')->unsigned()->default(1);
			$table->integer('industry_id')->unsigned()->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
