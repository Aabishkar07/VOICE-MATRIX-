<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSection extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'mini_image',
        'slug',
        'order',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
}
