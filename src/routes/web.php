<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return redirect()->route('notes.index');
});

Route::get('/dashboard', [NoteController::class, 'index'])->name('notes.index');
Route::get('/create', [NoteController::class, 'create'])->name('notes.create');
Route::get('/notes/{note}', [NoteController::class, 'show'])->name('notes.show');

Route::post('/create', [NoteController::class, 'store'])->name('notes.store');

Route::patch('/notes/{note}', [NoteController::class, 'update'])->name('notes.update');
