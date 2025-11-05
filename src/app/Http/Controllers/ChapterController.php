<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Models\NoteBook;

class ChapterController extends Controller
{
    public function index(NoteBook $notebook)
    {
        $chapters = $notebook->chapters()->get();
        return view('chapter_index', [
            'notebook' => $notebook,
            'chapters' => $chapters,
        ]);
    }

    public function show(Chapter $chapter)
    {
        return view('chapters')->with('chapter', $chapter);
    }

    public function create() {}

    public function store(Request $request) {}

    public function update(Request $request) {}
}
