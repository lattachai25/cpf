<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class meetings extends Model
{

    protected $fillable = [
        'series_name',
        'set_name',
        'group_name',
        'date',
        'time',
        'note',
        'file'
      ];

    public $timestamps = false;


}
