<?php

declare(strict_types=1);

test('globals')
 ->expect(['dd', 'dump'])
 ->not()
 ->toBeUsed();

test('No direct eloquent usage in controllers')
 ->expect('App\Models')
 ->not()
 ->toBeUsedIn('App\Http\Controllers');

 test('No response helpers used in controllers')
  ->expect('response')
  ->not()->toBeUsedIn('App\Http\Controllers');

test('Uses declarative response classes in controllers')
  ->expect('Illuminate\Http\JsonResponse')
  ->toBeUsedIn('App\Http\Controllers\Api');
