<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;
use App\Services\Post\Service;

class UpdateController extends BaseController
{
    public function __invoke(Post $post, UpdateRequest $request, Service $service)
    {
        $data = $request->validated();

        $post = $service->update($post, $data);

        return redirect('post.show', $post->id);
    }
}
