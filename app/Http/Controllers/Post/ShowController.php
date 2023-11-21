<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\BaseController;
use App\Http\Resources\PostResource;
use App\Http\Resources\CommentResource;
use App\Models\Post;

class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {
        $postResource = new PostResource($post);

        $comments = $post->comments()->get();
        $commentsResource = CommentResource::collection($comments);

        return [
            $postResource,
            $commentsResource,
        ];
    }
}
