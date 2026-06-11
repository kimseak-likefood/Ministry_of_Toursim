<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'date', 'image', 'description'];
    protected $casts = [
    'date' => 'date',
    ];
    protected $table = 'posts_events';
}
