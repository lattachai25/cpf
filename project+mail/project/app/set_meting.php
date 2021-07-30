<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class set_meting extends Model
{
    //
    protected $fillable = [
        'series_name',
        'set_name',
        'set_group',
        'detel',
        'note',
        'date',
        'time',
        'file'
      ];

      public $timestamps = false;

}

