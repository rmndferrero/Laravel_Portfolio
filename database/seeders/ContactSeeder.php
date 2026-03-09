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

        DB::table('contacts')->where('email', 'ferrero@usls.edu.ph')->delete();

        DB::table('contacts')->updateOrInsert(
                    ['email' => 'reymonddelacruzferrero@gmail.com'], // Checks if this email exists
                    [
                        'phone' => '+63 945 724 7855',
                        'github_url' => 'https://github.com/rmndferrero',
                        'linkedin_url' => 'https://www.linkedin.com/in/reymondferrero/',
                        'updated_at' => now()
                    ]
                );
    }
}
