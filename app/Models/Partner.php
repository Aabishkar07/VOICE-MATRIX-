<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    //
    protected $fillable = [
        'title',
        'featured_image',
        'order',
        'slug',
        'description',
        'number',
        'address',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'meta_image',

    ];

}
