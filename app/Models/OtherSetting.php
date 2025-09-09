<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OtherSetting extends Model
{
    //

    protected $fillable = [
        'email',
        'address',
        'contact_number',
        'facebook',
        'instagram',
        'youtube',
        'googlemap',
        'mainaddress',
        'linkedin',
        'tiktok',
        'twitter',
        'short_description',
    ];
}

