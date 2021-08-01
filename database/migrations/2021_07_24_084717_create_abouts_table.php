<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title')->nullable();
            $table->text('keywords')->nullable();
            $table->text('description')->nullable();
            $table->text('google_code')->nullable();
            $table->text('facrbook_code')->nullable();
            $table->text('orteh_code')->nullable();
            $table->text('story_en')->nullable();
            $table->text('story_th')->nullable();

            $table->text('history_en')->nullable();
            $table->text('history_th')->nullable();
            $table->text('name_en')->nullable();
            $table->text('name_th')->nullable();
            $table->text('protion_en')->nullable();
            $table->text('protion_th')->nullable();
            $table->text('content_en')->nullable();
            $table->text('content_th')->nullable();
            $table->string('images');
            $table->string('status');
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
        Schema::dropIfExists('abouts');
    }
}
