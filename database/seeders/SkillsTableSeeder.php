<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds. 
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            ['name'=>'HTML', 'level'=>'Intermediate', 'description'=>'I am learning HTML because it is the foundation of web development. It helps me understand how web pages are structured, and I am continuously improving my skills by practicing and building simple websites.', 'image'=>'assets/html.png'],
            ['name'=>'CSS', 'level'=>'Intermediate', 'description'=>'I am learning CSS because it allows me to design and style web pages. I am trying to improve my skills in layouts, colors, and responsive design so that my websites look more professional and user-friendly.', 'image'=>'assets/css.png'],
            ['name'=>'JavaScript', 'level'=>'Intermediate', 'description'=>'I am learning JavaScript because it makes websites interactive and dynamic. I am working on improving my understanding of functions, events, and logic by creating small projects and practicing regularly.', 'image'=>'assets/JavaScript-Logo.png'],
            ['name'=>'PHP', 'level'=>'Intermediate', 'description'=>'I am learning PHP because it helps me understand server-side programming and how websites handle data. I am trying to improve my skills by building simple systems and practicing database connections.', 'image'=>'assets/PHP-logo.svg.png'],
            ['name'=>'C++', 'level'=>'Intermediate', 'description'=>'I am learning C++ because it strengthens my understanding of programming logic and problem-solving. I am trying to improve my skills in algorithms and coding techniques through exercises and school projects.', 'image'=>'assets/c.png'],
            ['name'=>'Laravel', 'level'=>'Beginner', 'description'=>'I am learning Laravel because it helps me build structured and organized web applications. I am trying to improve my understanding of MVC, routing, and databases by creating small projects and exploring its features.', 'image'=>'assets/laravel.png'],
        ]);
    }
}
