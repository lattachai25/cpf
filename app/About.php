<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //
    protected $fillable = [
        'title',
        'keywords',
        'description',
        'google_code',
        'facrbook_code',
        'orteh_code',
        'story_en',
        'story_th',
        'history_en',
        'history_th',
        'name_en',
        'name_th',
        'protion_en',
        'protion_th',
        'content_en',
        'content_th',
        'status',
        'images'
      ];

    public $timestamps = false;
}
