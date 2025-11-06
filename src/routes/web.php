<?php

use App\Http\Controllers\ChapterController;
use App\Http\Controllers\NoteBookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\AuthController;
use App\http\controllers\ApiController;

Route::get('/', function () {
    return redirect()->route('show.register');
});
Route::get('/status/batch', [ApiController::class, 'getBatchStatus']);
Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/login', [AuthController::class, 'ShowLogin'])->name('show.login');
Route::get('/register', [AuthController::class, 'ShowRegister'])->name('show.register');
Route::post('/register', [AuthController::class, 'Register'])->name('register');
Route::post('/login', [AuthController::class, 'Login'])->name('login');

Route::post('/logout', [AuthController::class, 'LogOut'])->name('logout')->middleware('auth');
Route::get('/notebooks', [NoteBookController::class, 'index'])->name('notebook.index')->middleware('auth');                                     //show all notebook
Route::get('/notebooks/{notebook}/chapters', [ChapterController::class, 'index'])->name('chapter.index')->middleware('auth');                   //show all chapter under notebook
Route::get('/notebooks/{notebook}/chapters/{chapter}/notes', [NoteController::class, 'index'])->name('note.index')->middleware('auth');         //show all notes under chapter
Route::get('/notebooks/{notebook}/chapters/{chapter}/notes/{note}', [NoteController::class, 'show'])->name('notes.show')->middleware('auth');   //show single note under notes
Route::get('/create', [NoteController::class, 'create'])->name('notes.create')->middleware('auth');
Route::post('/create', [NoteController::class, 'store'])->name('notes.store')->middleware('auth');
Route::patch('/notes/{note}', [NoteController::class, 'update'])->name('notes.update')->middleware('auth');
