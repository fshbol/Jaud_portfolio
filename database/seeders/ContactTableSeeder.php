<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            ['title'=>'Facebook', 'description'=>'https://www.facebook.com/rika.jaud', 'image'=>'assets/fbic.png'],
            ['title'=>'Github', 'description'=>'https://github.com/fshbol', 'image'=>'assets/gitbuhic.png'],
            ['title'=>'Email', 'description'=>'s2100126@usls.edu.ph', 'image'=>'assets/emailic.png'],
        ]);
    }
}
