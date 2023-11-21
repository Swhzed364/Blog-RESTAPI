<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\BaseController;
use App\Models\Post;

class DestroyController extends BaseController
{
    public function __invoke(Post $post)
    {
        Post::destroy($post->id);

        return redirect('post.index');
    }
}
