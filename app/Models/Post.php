<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{

    protected $guarded = false;

    public function likedBy(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'post_users', 'post_id', 'user_id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'post');
    }
}
