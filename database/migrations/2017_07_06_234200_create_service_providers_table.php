<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiceProvidersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('service_providers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 191);
			$table->string('address', 191)->nullable();
			$table->string('uen', 191)->nullable();
			$table->string('website', 191)->nullable();
			$table->string('email', 191)->nullable();
			$table->string('industry_id', 191);
			$table->timestamps();
			$table->string('phone', 191)->nullable();
			$table->string('source', 191)->nullable();
			$table->text('description', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('service_providers');
	}

}
