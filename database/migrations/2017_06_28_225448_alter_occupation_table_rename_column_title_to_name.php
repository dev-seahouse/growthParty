<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterOccupationTableRenameColumnTitleToName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('occupations', function(Blueprint $table){
        $table->renameColumn( 'title', 'name');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('occupations', function(Blueprint $table){
        $table->renameColumn( 'name', 'title');
      });
    }
}
