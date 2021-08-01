<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title')->nullable();
            $table->text('keywords')->nullable();
            $table->text('description')->nullable();
            $table->text('google_code')->nullable();
            $table->text('facrbook_code')->nullable();
            $table->text('orteh_code')->nullable();

            $table->text('text_title_en')->nullable();
            $table->text('text_title_th')->nullable();
            $table->text('address_en')->nullable();
            $table->text('address_th')->nullable();
            $table->text('faceboot_link_en')->nullable();
            $table->text('faceboot_link_th')->nullable();
            $table->text('line_link_en')->nullable();
            $table->text('line_link_th')->nullable();
            $table->text('tel_link_en')->nullable();
            $table->text('tel_link_th')->nullable();

            $table->text('mobile_link_en')->nullable();
            $table->text('mobile_link_th')->nullable();

            $table->text('Email_link1_en')->nullable();
            $table->text('Email_link1_th')->nullable();

            $table->text('Email_link2_en')->nullable();
            $table->text('Email_link2_th')->nullable();
            $table->text('link_map')->nullable();

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
        Schema::dropIfExists('contacts');
    }
}
