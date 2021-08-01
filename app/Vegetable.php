<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vegetable extends Model
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
       'images_logo',
       'text_title_en',
       'text_title_th',
       'name_product_en',
       'name_product_th',
       'detel_product_en',
       'detel_product_th',
       'images_product1',
       'images_product2',
       'images_product3',
       'images_product4',
       'images_product5',
       'images_product6',
       'status'
             ];
       
           public $timestamps = false;
       }
       
}
