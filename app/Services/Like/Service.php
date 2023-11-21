<?php

namespace App\Services\Like;

use App\Models\Post;

class Service
{
    public function like($post, $user)
    {
        $post->likedBy()->attach($user);

        $likes = $post->likedBy()->get();
        $post->likes = count($likes);

        $post->save();

        return Post::find($post->id);
    }
}
