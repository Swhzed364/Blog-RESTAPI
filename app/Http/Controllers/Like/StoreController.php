<?php

namespace App\Http\Controllers\Like;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Models\User;
use App\Services\Like\Service;

class StoreController extends Controller
{
    public function __invoke(Post $post, User $user, Service $service)
    {
        $post = $service->like($post, $user);

        return new PostResource($post);
    }
}
