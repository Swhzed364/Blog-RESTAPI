<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\BaseController;
use App\Http\Resources\PostResource;
use App\Models\Post;

class EditController extends BaseController
{
    public function __invoke(Post $post)
    {
        return new PostResource($post);
    }
}
