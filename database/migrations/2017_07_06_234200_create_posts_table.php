<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('author_id');
			$table->integer('category_id')->nullable();
			$table->string('title', 191);
			$table->string('seo_title', 191)->nullable();
			$table->text('excerpt', 65535);
			$table->text('body', 65535);
			$table->string('image', 191)->nullable();
			$table->string('slug', 191)->unique();
			$table->text('meta_description', 65535);
			$table->text('meta_keywords', 65535);
			$table->enum('status', array('PUBLISHED','DRAFT','PENDING'))->default('DRAFT');
			$table->boolean('featured')->default(0);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
