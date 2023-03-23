<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Posts;

use App\Http\Controllers\Controller;
use App\Http\Services\PostService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

final class IndexController extends Controller {
    public function __invoke(Request $request, PostService $service) {
        return new JsonResponse(
            data: $service->getPosts(),
            status: Response::HTTP_OK
        );
    }
}
