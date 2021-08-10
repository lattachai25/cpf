<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beefs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('google_code')->nullable();
            $table->string('facrbook_code')->nullable();
            $table->string('orteh_code')->nullable();
            
            $table->string('brade')->nullable();
            $table->string('category')->nullable();
            $table->string('sub_category')->nullable();
            
            $table->string('text_title_en')->nullable();
            $table->string('text_title_th')->nullable();
            $table->string('name_product_en')->nullable();
            $table->string('name_product_th')->nullable();
            $table->string('detel_product_en')->nullable();
            $table->string('detel_product_th')->nullable();
            $table->text('images_product1')->nullable();
            $table->text('attachment')->nullable();
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
        Schema::dropIfExists('beefs');
    }
}
