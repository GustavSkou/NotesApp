<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Note;
use App\Models\User;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Note::factory(10)->create();
        /*
        $users = User::All();

        for ($i = 0; $i < 10; $i++) {
            Note::factory()->create([
                'created_by' => fake()->randomElement($users)
            ]);
        }*/
    }
}
