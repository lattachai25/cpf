<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //
    protected $fillable = [
        'name_brand_en',
        'name_brand_th',
        'status',
        'images'
      ];

    public $timestamps = false;
}
