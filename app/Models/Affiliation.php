<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Affiliation extends Model
{
    protected $table = "affiliations";

    protected $fillable = [
        "title",
        "image",
        "order",
    ];
}
