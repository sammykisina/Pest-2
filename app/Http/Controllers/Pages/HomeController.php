<?php

declare(strict_types=1);

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller {
    public function __invoke(Request $request): ViewContract {
        return View::make(
            view: 'welcome',
            data: [
                'message' => 'Pest v2 woooo'
            ]
        );
    }
}
