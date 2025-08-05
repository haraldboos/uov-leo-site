<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class announsment extends Model
{
    //
     protected $fillable = [
        'title',
        'date_created',
        'deadline',
        'image',
        'link',
        'google_form_link',
        'facebook_link',
        'description',
        'is_active',
    ];
}
