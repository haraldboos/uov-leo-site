<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    //
        protected $fillable = [
        'image_path',
        'status',
        'link',
    ];

    // Cast 'status' to boolean
    protected $casts = [
        'status' => 'boolean',
    ];

}
