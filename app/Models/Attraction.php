<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    //
    protected $fillable = [
        'name',
        'name_kh',
        'subtitle',
        'image',
        'alt_text',
        'slug',
    ];
}
