<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('project')->insert([
            ['title'=>'Repora - Mobile App', 'description'=>'A mobile application designed for mall employees to quickly report and respond to incidents. It streamlines communication, improves reaction time, and ensures better safety management within the workplace.', 'image'=>'assets/Repora.gif'],
            ['title'=>'Budget Buddy - Personal Budget', 'description'=>'A simple yet effective finance app that helps users manage their income, expenses, and savings. It promotes smarter financial habits by tracking spending patterns and setting budget goals.', 'image'=>'assets/budgetB.gif'],
            ['title'=>'Bust-a-Beat - 2D Pixel Game', 'description'=>'A fast-paced 2D platformer shooter featuring retro pixel art, music-driven gameplay, and challenging levels. Players battle enemies while moving to the rhythm, combining action and creativity.', 'image'=>'assets/bustab.gif'],
        ]);
    }
}
