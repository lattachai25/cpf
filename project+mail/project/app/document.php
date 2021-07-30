<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;

class document extends Model
{
    //
    protected $fillable = [
        'documents_name',
        'documents_id'
      ];

      public $timestamps = false;

}
