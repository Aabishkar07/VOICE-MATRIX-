<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'name',
        'product_id',
        'product_name',
        'email',
        'subject',
        'message',
        'phonenumber'
    ];
}
