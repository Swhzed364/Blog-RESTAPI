<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\BaseController;
use App\Models\Post;
use App\Http\Resources\PostResource;


class IndexController extends BaseController
{
    public function __invoke()
    {
        $data = Post::paginate(10);
        return PostResource::collection($data);
    }
}
