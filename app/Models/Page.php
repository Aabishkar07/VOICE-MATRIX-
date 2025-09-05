<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title',
        'about_title',
        'slug',
        'description',
        'top_image',
        'mid_image',
        'short_description',
        'history',
        'vision',
        'mission',

    ];
}
