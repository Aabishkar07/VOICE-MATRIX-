<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'image',
        'order',
        'slug',
        'description',
        'parent_id',
        'image_alt',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
}
