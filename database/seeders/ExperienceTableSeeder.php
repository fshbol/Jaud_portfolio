<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Experience;

class ExperienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('experience')->insert([
        [ 
            'title' => 'La Consolacion College Bacolod', 
            'description' => 'I attended La Consolacion College Bacolod from elementary through 6th grade. It was here that I built my foundational knowledge and developed my curiosity for learning, setting the stage for my academic journey.' 
        ],

        [ 
            'title' => 'St. Joseph School La Salle', 
            'description' => 'I spent my high school years at St. Joseph School La Salle, where I not only focused on my studies but also forged lasting friendships and learned the value of teamwork and community.' 
        ],

        [ 
            'title' => 'University of St. La Salle Bacolod', 
            'description' => 'I started my senior high school in the Medical Science strand before ultimately choosing to pursue a degree in Computer Science. My time at the university has been a period of growth, exploration, and developing my passion for technology and programming.' 
        ]
            ]);
    }
}
