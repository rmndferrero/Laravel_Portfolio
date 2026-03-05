<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    public function run(): void
        {
            DB::table('profiles')->insert([
                'name' => 'Reymond Ferrero',
                'tagline' => 'BS Computer Science Student',
                'bio' => 'A dedicated Computer Science student with a passion for game development, data analysis, and creating interactive experiences. When not coding, I enjoy gardening and cultivating plants like marigolds, sunflowers, and Tabasco peppers.',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
}
