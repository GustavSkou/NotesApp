<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\NoteBook;
use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\User;

class NoteController extends Controller
{
    /*public function index()
    {
        $notes = Note::select('*')->orderBy('updated_at', 'desc')->paginate(10);
        return view('dashboard', ['notes' => $notes]);
    }*/

    public function index(NoteBook $notebook, Chapter $chapter)
    {
        $notes = $chapter->notes()->get();
        return view('note_index', [
            'notebook' => $notebook,
            'chapter' => $chapter,
            'notes' => $notes
        ]);
    }

    // use route-model binding so $note is an instance of Models\Note
    public function show(NoteBook $notebook, Chapter $chapter, Note $note)
    {
        return view('notes', [
            'notebook' => $notebook,
            'chapter' => $chapter,
            'note' => $note
        ]);
    }

    public function create() //return view with the current user
    {
        $user = User::where('id', 1)->first();
        $chapters = Chapter::all();

        return view('create_note')
            ->with('user', $user)
            ->with('chapters', $chapters);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'contents' => 'max:1000',
            'chapter_id' => 'required|integer',
        ]);

        Note::create($validated);
        return redirect()->route('dashboard.index')->with('success', 'Created new note');
    }

    public function update(Request $request, Note $note)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'contents' => 'max:1000',
        ]);
        $note->update($validated);
        return redirect()->route('dashboard.index')->with('success', 'Updated note');
    }
}
