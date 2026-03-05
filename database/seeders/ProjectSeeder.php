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
        DB::table('projects')->insert([
            [
                'title' => 'Gamifying Tourism Experience Through a Location-Based AR App in Bacolod City',
                'description' => 'A thesis project developing a location-based application. Built collaboratively with Cassandra Nicole Abrasia, David Joshua Albos, and Napoleon III Torrefiel Cortez.',
                'technology' => 'GPS, Mobile Technologies',
                'github_link' => '#',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'TIROHAY ISPISHIP',
                'description' => 'A 2D pixel art game.',
                'technology' => 'Unity, C#',
                'github_link' => '#',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
