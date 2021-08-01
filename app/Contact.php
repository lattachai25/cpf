<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = [
        'title',
        'keywords',
        'description',
        'google_code',
        'facrbook_code',
        'orteh_code',
        'text_title_en',
        'text_title_th',
        'address_en',
        'address_th',
        'faceboot_link_en',
        'faceboot_link_th',
        'line_link_en',
        'line_link_th',
        'tel_link_en',
        'tel_link_th',
        'mobile_link_en',
        'mobile_link_th',
        'Email_link1_en',
        'Email_link1_th',
        'Email_link2_en',
        'Email_link2_th',
        'link_map'
      ];

    public $timestamps = false;
}
