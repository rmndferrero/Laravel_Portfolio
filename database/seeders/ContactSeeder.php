<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
        'email' => 'ferrero@usls.edu.ph', // Update with actual email
        'phone' => '+63 900 000 0000',
        'github_url' => 'https://github.com/yourusername',
        'linkedin_url' => 'https://linkedin.com/in/yourusername',
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    }
}
