<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCephalopodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cephalopods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_bar');
            $table->string('keyworks');
            $table->string('description');
            $table->string('google');
            $table->string('facebook');
            $table->string('orteh_code');
            $table->string('text_title_en');
            $table->string('text_title_th');

            $table->string('brade');
            $table->string('category');
            $table->string('sub_category');

            $table->string('images_logo');
            $table->string('name_product_en');
            $table->string('name_product_th');
            $table->string('detel_product_en');
            $table->string('detel_product_th');
            $table->string('images_product1');
            $table->string('images_product2');
            $table->string('images_product3');
            $table->string('images_product4');
            $table->string('images_product5');
            $table->string('images_product6');
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
        Schema::dropIfExists('cephalopods');
    }
}
