<?php

declare(strict_types=1);

use App\Http\Controllers\Pages\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
