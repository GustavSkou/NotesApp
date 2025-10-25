<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\User;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::select('*')->orderBy('updated_at', 'desc')->paginate(10);
        return view('dashboard', ['notes' => $notes]);
    }

    public function show($id)
    {
        $note = Note::findOrFail($id);
        return view('notes', ['note', $note]);
    }

    public function create() //return view with the current user
    {
        $user = User::where('id', 1)->first();

        return view('create_note', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'contents' => 'required|string|max:1000',
        ]);

        Note::create($validated);
        return redirect()->route('notes.index');
    }
}
