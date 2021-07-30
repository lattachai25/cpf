<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;

class series_meting extends Model
{
    protected $fillable = [
        'series_name'
      ];


    public $timestamps = false;

}
