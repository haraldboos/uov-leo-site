<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Newsletter extends Model
{
    //
    protected $fillable = ['title', 'slug', 'banner', 'file'];

    // Automatically generate slug
    public static function boot()
    {
        parent::boot();

        static::creating(function ($newsletter) {
            $newsletter->slug = Str::slug($newsletter->title);
        });
    }
}
