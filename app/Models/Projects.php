<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    //
        protected $fillable = [
        'title',
        'description',
        'location',
        'project_date',
        'main_photo',
        'photos',
        'is_public',
        'facebook_link',
    ];

    protected $casts = [
        'photos' => 'array',
        'project_date' => 'date',
        'is_public' => 'boolean',
    ];
}
