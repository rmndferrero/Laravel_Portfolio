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
        DB::table('skills')->truncate();

        $skills = [
            // Languages
            [
                'skill'       => 'Python',
                'type'        => 'Language',
                'description' => 'Versatile high-level language used for scripting, data analysis, and backend development.',
            ],
            [
                'skill'       => 'HTML',
                'type'        => 'Language',
                'description' => 'Markup language for structuring and presenting content on the web.',
            ],
            [
                'skill'       => 'PHP',
                'type'        => 'Language',
                'description' => 'Server-side scripting language widely used for web application development.',
            ],
            [
                'skill'       => 'CSS',
                'type'        => 'Language',
                'description' => 'Stylesheet language for designing and styling web page layouts and visuals.',
            ],
            [
                'skill'       => 'JavaScript',
                'type'        => 'Language',
                'description' => 'Dynamic scripting language that powers interactivity and logic on the web.',
            ],
            [
                'skill'       => 'C#',
                'type'        => 'Language',
                'description' => 'Strongly-typed object-oriented language used in game development and enterprise apps.',
            ],

            // Frameworks
            [
                'skill'       => 'Laravel',
                'type'        => 'Framework',
                'description' => 'Elegant PHP framework for building robust, scalable web applications with expressive syntax.',
            ],
            [
                'skill'       => 'Django',
                'type'        => 'Framework',
                'description' => 'High-level Python web framework that encourages rapid development and clean design.',
            ],
            [
                'skill'       => 'Pandas',
                'type'        => 'Framework',
                'description' => 'Powerful Python library for data manipulation, analysis, and transformation.',
            ],
            [
                'skill'       => 'Seaborn',
                'type'        => 'Framework',
                'description' => 'Python visualization library built on Matplotlib for creating informative statistical graphics.',
            ],
            [
                'skill'       => 'Unity Game Engine',
                'type'        => 'Specialization',
                'description' => 'Expert proficiency in real-time 3D development. Specializing in high-performance C# scripting, shader programming, and immersive environment design for both desktop and VR platforms.'],
        ];

        DB::table('skills')->insert($skills);
    }

}
