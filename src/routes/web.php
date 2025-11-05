<?php

use App\Http\Controllers\ChapterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NoteBookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Models\Chapter;

Route::get('/', function () {
    return redirect()->route('notebook.index');
});

Route::get('/notebooks', [NoteBookController::class, 'index'])->name('notebook.index');             //show all notebook
Route::get('/notebooks/{notebook}/chapters', [ChapterController::class, 'index'])->name('chapter.index');    //show all chapter under notebook
Route::get('/notebooks/{notebook}/chapters/{chapter}/notes', [NoteController::class, 'index'])->name('note.index');            //show all notes under chapter
Route::get('/notebooks/{notebook}/chapters/{chapter}/notes/{note}', [NoteController::class, 'show'])->name('notes.show');                   //show single note under notes



Route::get('/create', [NoteController::class, 'create'])->name('notes.create');
Route::post('/create', [NoteController::class, 'store'])->name('notes.store');
Route::patch('/notes/{note}', [NoteController::class, 'update'])->name('notes.update');
