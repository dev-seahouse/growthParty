<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTableChangeOccupationToOccupationId extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('users', function (Blueprint $table) {
      $table->dropColumn('occupation');
      $table->dropColumn('industry');
      $table->unsignedInteger('occupation_id')->default(1);
      $table->unsignedInteger('industry_id')->default(1);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('users', function (Blueprint $table) {
      $table->dropColumn('occupation_id');
      $table->dropColumn('industry_id');
      $table->string('industry')->nullable();
      $table->string('occupation')->nullable();
    });
  }
}
