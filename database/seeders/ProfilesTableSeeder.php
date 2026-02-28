<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
        {
            Profile::create([
                'title' => 'Hi, my name is Erika Jaud',
                'description' => 'I am 21 years old and currently a third-year Computer Science student at the University of St. La Salle. I am passionate about learning new technologies and continuously improving my skills in programming and system development.'
            ]);

            Profile::create([
                'title' => 'Artist',
                'description' => 'I am a creative and imaginative person who enjoys drawing and designing in my free time. Art has always been one of my passions because it allows me to express my thoughts and ideas visually. I enjoy experimenting with different styles and techniques, both in traditional sketching and digital illustration. Creating art helps me relax and at the same time inspires me to think creatively, which also helps me in my projects and designs.'
            ]);

            Profile::create([
                'title' => 'CS Student',
                'description' => 'As a Computer Science student, I am dedicated to learning and improving my knowledge in programming and technology. I work hard to understand different programming languages, systems, and problem-solving techniques. Although some topics can be challenging, I see them as opportunities to grow and improve my skills. I enjoy working on projects where I can apply what I have learned and gain real experience. My goal is to become a skilled professional who can create useful and meaningful technology.'
            ]);

            Profile::create([
                'title' => 'Developer',
                'description' => 'I am an aspiring developer who is continuously learning and gaining experience through projects and practice. I enjoy building simple applications and exploring new tools and frameworks that can help improve my skills. Even though I am still learning, I am motivated to keep improving and expanding my knowledge step by step. I believe that becoming a good developer requires patience, dedication, and constant learning, and I am committed to growing in this field.'
            ]);
        }
}
