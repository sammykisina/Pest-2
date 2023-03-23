<?php

declare(strict_types=1);

use App\Http\Controllers\Api\Posts\IndexController;
use Illuminate\Support\Facades\Route;

Route::prefix('posts')->as('posts:')->group(static function (): void {
    Route::get('/', IndexController::class)->name('index');
});
