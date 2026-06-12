<?php

namespace App\Models;
use App\Models\PostLike;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'title', 'content', 'image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
{
    return $this->hasMany(PostLike::class);
}

public function isLikedBy($user)
{
    if (!$user) return false;
    return $this->likes()->where('user_id', $user->id)->exists();
}
}
