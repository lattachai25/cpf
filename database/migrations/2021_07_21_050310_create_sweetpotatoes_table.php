<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSweetpotatoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sweetpotatoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_bar')->nullable();
            $table->string('keyworks')->nullable();
            $table->string('description')->nullable();
            $table->string('google')->nullable();
            $table->string('facebook')->nullable();
            $table->string('orteh_code')->nullable();
            
            $table->string('brade')->nullable();
            $table->string('category')->nullable();
            $table->string('sub_category')->nullable();
            
            $table->string('images_logo')->nullable();
            $table->string('text_title_en')->nullable();
            $table->string('text_title_th')->nullable();
            $table->string('name_product_en')->nullable();
            $table->string('name_product_th')->nullable();
            $table->string('detel_product_en')->nullable();
            $table->string('detel_product_th')->nullable();
            $table->string('images_product1')->nullable();
            $table->string('images_product2')->nullable();
            $table->string('images_product3')->nullable();
            $table->string('images_product4')->nullable();
            $table->string('images_product5')->nullable();
            $table->string('images_product6')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('sweetpotatoes');
    }
}
