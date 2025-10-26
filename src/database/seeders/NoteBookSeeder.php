<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\NoteBook;
use Database\Factories\NoteBookFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NoteBook::factory(5)->create();
    }
}
