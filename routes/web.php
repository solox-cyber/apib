<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/config-clear', function () {
    $clear = Artisan::call('config:clear');
    return 'Config cache cleared successfully';
});

Route::get('/optimize', function () {
    $optimize = Artisan::call('optimize');
    return 'Application optimized successfully';
});

Route::get('/autoload', function () {
    $output = Artisan::call('dump-autoload');
    return 'Composer autoload dumped successfully';
});

Route::get('/cache-clear', function () {
    $cache = Artisan::call('cache:clear');
    return 'Cached clear successfully';
});


Route::get('/route-clear', function () {
    $clear = Artisan::call('route:clear');
    return 'Route cache cleared successfully';
});

Route::get('/route-cache', function () {
    $cache = Artisan::call('route:cache');
    return 'Route cached successfully';
});

Route::get('/view-cache', function () {
    $cache = Artisan::call('view:cache');
    return 'View cached successfully';
});

Route::get('/view-clear', function () {
    $clear = Artisan::call('view:clear');
    return 'View cache cleared successfully';
});