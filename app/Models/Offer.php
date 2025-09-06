<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'title',
        'image',
        'short_description',
        'order',
        'description',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'meta_image',
    ];
}
