<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterServiceProvidersAddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('service_providers', function (Blueprint $table) {
        $table->string('address')->nullable()->change();
        $table->string('phone')->nullable();
        $table->string('uen')->nullable()->change();
        $table->string('website')->nullable()->change();
        $table->string('email')->nullable()->change();
        $table->renameColumn('industry', 'industry_id');
        $table->string('source')->nullable();
        $table->text('description')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('service_providers', function (Blueprint $table) {
        $table->string('address')->change();
        $table->string('uen')->change();
        $table->string('website')->change();
        $table->string('email')->change();
        $table->renameColumn('industry_id', 'industry');
        $table->dropColumn('source');
        $table->dropColumn('description');
        $table->dropColumn('phone');
      });
    }
}
