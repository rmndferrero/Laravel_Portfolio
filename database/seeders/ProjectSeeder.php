<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('projects')->where('title', 'Gamifying Tourism Experience Through a Location-Based AR App in Bacolod City')->delete();
        DB::table('projects')->where('title', 'TIROHAY ISPISHIP')->delete();
        // Project 1
        DB::table('projects')->updateOrInsert(
            ['title' => 'SupplyRoot'], // Checks if this title exists
            [
                'description' => 'A Inventory Management System focusing on farm supplies.',
                'technology' => 'HTML, CSS, JavaScript, PHP',
                'github_link' => '#',
                'updated_at' => now() // Notice created_at is handled automatically by Laravel here
            ]
        );

        // Project 2
        DB::table('projects')->updateOrInsert(
            ['title' => 'Crystal Guard'], // Checks if this title exists
            [
                'description' => 'A 3D pixel themed dungeon dive game.',
                'technology' => 'Unity, C#',
                'github_link' => 'https://github.com/rmndferrero/Crystal_Guard',
                'updated_at' => now()
            ]
        );
    }
}


