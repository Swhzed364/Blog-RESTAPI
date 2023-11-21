<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\StoreRequest;
use App\Services\Comment\Service;
use App\Http\Resources\CommentResource;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, Service $service)
    {
        $data = $request->validated();

        $comment = $service->store($data);

        return new CommentResource($comment);
    }
}
