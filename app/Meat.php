<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meat extends Model
{
    //
    protected $fillable = [
      'title',
      'keywords',
      'description',
      'google_code',
      'facrbook_code',
      'orteh_code',  

      'brade',
      'category',
      'sub_category',
      'text_title_en',
      'text_title_th',

      'name_product_en',
      'name_product_th',

      'detel_product_en',
      'detel_product_th',
      
      'images_show',
      'images_product1',
      'attachment',
      'status'
            ];
      
     public $timestamps = false;
  
}
