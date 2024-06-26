<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffliaaateCountTrigger extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    DB::unprepared('
       CREATE TRIGGER tr_update_affiliate_count
       AFTER INSERT
       ON `program_user`
       FOR EACH ROW 
          UPDATE `programs`
          SET `affiliate_count` = `affiliate_count` + 1
          WHERE `id` = NEW.program_id
      ');
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    DB::unprepared('DROP TRIGGER `tr_update_affiliate_count`');
  }
}
