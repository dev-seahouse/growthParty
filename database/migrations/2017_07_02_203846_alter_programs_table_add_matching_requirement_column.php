<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterProgramsTableAddMatchingRequirementColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('programs', function(Blueprint $table) {
        $table->text('matching_requirements')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('programs', function (Blueprint $table) {
        $table->dropColumn('matching_requirements');
      });
    }
}
