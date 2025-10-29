<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /** @use HasFactory<\Database\Factories\NoteFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'contents',
        'chapter_id'
    ];

    public function chapter()
    {
        // match chapter's id to chapter_id
        return $this->belongsTo(Chapter::class, 'chapter_id');
    }
}
