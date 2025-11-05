<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NoteBook;

class NoteBookController extends Controller
{
    public function index()
    {
        $noteBooks = NoteBook::all();
        return view('notebook_index', ['noteBooks' => $noteBooks]);
    }

    public function show() {}

    public function create() {}

    public function store(Request $request) {}

    public function update(Request $request) {}
}
