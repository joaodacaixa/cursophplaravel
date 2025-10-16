<?php

namespace Database\Seeders;

use App\Models\Course;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
      {
        // User::factory(10)->create();

        Course::factory()->create([
            'title' => 'Curso do Joao',
            'description' => 'curso de ser Joao',
            'courseHead' => 'Joao',
        ]);

        Course::factory()->create([
            'title' => 'Curso do Joao2',
            'description' => 'curso de ser Joao2',
            'courseHead' => 'Joao2',
        ]);
    }
}
