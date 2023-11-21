<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Resources\PostResource;
use App\Services\Post\Service;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request, Service $service)
    {
        $data = $request->validated();

        $post = $service->store($data);

        return new PostResource($post);
    }
}
