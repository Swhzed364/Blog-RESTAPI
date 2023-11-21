<?php

namespace App\Services\Comment;

use App\Models\Comment;
use App\Http\Resources\CommentResource;

class Service
{
    public function store($data)
    {
        $comment = Comment::create($data);

        return $comment;
    }
}
