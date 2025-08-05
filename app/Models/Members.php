<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{

       protected $fillable = [
        'image',
        'name',
        'position',
        'email',
        'phone',
        'year',
        'category',
        'order_number',
    ];
protected static function booted()
{
   
    static::creating(function ($member) {
            $member->order_number = Members::max('order_number') + 1;
        });


}
}