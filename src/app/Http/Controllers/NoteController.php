<?php

namespace App\Http\Controllers;

use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();/*where('created_by', 1)->get();*/
        return view('dashboard', ['notes' => $notes]);
    }

    public function show()
    {

    }

    public function create() 
    {

    }
}
