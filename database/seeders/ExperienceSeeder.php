<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('experiences')->insert([
            [
                'title' => 'BS Computer Science',
                'company' => 'University of St. La Salle',
                'start_date' => '2022-08-01', // Adjust as needed
                'end_date' => null, 
                'description' => 'Student in the College of Engineering and Computing Studies.',
                'type' => 'Education',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
