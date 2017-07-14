<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// apologise disclaimer:
// having this table is both naive and inefficient
// i'm sorry for creating this in earlier stage of development
// this table should exist only as a view with dynamic
// data fields generated from a number of factors such as
// reviews, also datatype should be float, it is left as integer
// because of laziness to deal with floats in calculating priority of programs
// -- Kenan
class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service')->default(0);
            $table->integer('communication')->default(0);
            $table->integer('service_provider_id');
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
        Schema::dropIfExists('ratings');
    }
}
