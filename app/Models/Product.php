<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'service_id',
        'image',
        'description',
        'status'
    ];

    public function services()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
