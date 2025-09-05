<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    //
    protected $fillable = [
        'title',
        'featured_image',
        'designation',
        'slug',
        'description',
    ];
}
