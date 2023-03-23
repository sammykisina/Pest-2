<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class PostService {
    public function getPosts(): Collection {
        return Post::query()->get();
    }
}
