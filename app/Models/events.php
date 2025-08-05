<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    //

     protected $fillable = [
        'title',
        'event_date',
        'description',
        'main_photo',
        'photos',
    ];

    protected $casts = [
        'photos' => 'array', 
    ];
}
