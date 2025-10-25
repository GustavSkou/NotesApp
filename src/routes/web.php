<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return redirect()->route('notes.index');
});

Route::get('/dashboard', [NoteController::class, 'index'])->name('notes.index');
Route::get('/create', [NoteController::class, 'create'])->name('notes.create');

Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');
