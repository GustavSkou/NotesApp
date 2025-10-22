<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', [NoteController::class, 'index']);

Route::get('/create', function () {
    return view('create');
});
