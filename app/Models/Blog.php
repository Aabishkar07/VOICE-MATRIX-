<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'featured_image',
        'order',
        'slug',
        'status',
        'category_id',
        'views',
        'likes',
        'description',
        'reading_time'
    ];
}
