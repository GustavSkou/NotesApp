<?php

namespace Database\Seeders;

use App\Models\Chapter;
use App\Models\NoteBook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $noteBooks = NoteBook::all();

        foreach ($noteBooks as $noteBook) {
            Chapter::factory(5)->create([
                'note_book_id' => $noteBook
            ]);
        }
    }
}
