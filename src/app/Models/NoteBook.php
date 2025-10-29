<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoteBook extends Model
{
    /** @use HasFactory<\Database\Factories\NoteBookFactory> */
    use HasFactory;

    protected $fillable = [
        "name"
    ];

    public function chapters()
    {
        return $this->hasMany(Chapter::class, 'note_book_id');
    }
}
