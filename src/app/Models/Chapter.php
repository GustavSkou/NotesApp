<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    /** @use HasFactory<\Database\Factories\ChapterFactory> */
    use HasFactory;

    protected $fillable = [
        "name",
        "note_book_id"
    ];

    public function notes()
    {
        // match chapter's own id to the foreignKey chapter_id in Note
        return $this->hasMany(Note::class, 'chapter_id');
    }

    public function noteBook()
    {
        return $this->belongsTo(NoteBook::class, 'note_book_id');
    }
}
