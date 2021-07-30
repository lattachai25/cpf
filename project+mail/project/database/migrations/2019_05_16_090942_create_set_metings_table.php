<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetMetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_metings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('series_name');
            $table->string('set_name');
            $table->string('set_group ');
            $table->string('detel');
            $table->string('note');
            $table->string('date');
            $table->string('time');
            $table->string('file');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_metings');
    }
}
