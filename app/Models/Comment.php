<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{

    protected $guarded = false;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user', 'id');
    }

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'post', 'id');
    }

    public function comment(): BelongsTo
    {
        return $this->belongsTo(Comment::class, 'comment', 'id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'comment', 'id');
    }
}
