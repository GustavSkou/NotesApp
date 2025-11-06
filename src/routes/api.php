<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('/status/batch', [ApiController::class, 'getBatchStatus']);

Route::get('/test', function () {
    return view('test');
})->name('test');
