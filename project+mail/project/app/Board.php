<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    //
    protected $fillable = [
        'board_name',
        'user_name',
        'position',
        'pro_num'

      ];


    public $timestamps = false;
}
