<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('skills')->insert([
        ['name' => 'Laravel', 'proficiency_level' => 'Intermediate', 'created_at' => now(), 'updated_at' => now()],
        ['name' => 'Unity', 'proficiency_level' => 'Advanced', 'created_at' => now(), 'updated_at' => now()],
        ['name' => 'Python (pandas)', 'proficiency_level' => 'Advanced', 'created_at' => now(), 'updated_at' => now()],
        ['name' => 'TensorFlow', 'proficiency_level' => 'Intermediate', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
