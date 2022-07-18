<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['title' => 'Assalaam juara', 'content' => 'Assalaam studio' ],
            ['title' => 'Assalaam berkurban', 'content' => 'Assalaam studio' ],
            ['title' => 'Assalaam bersolawat', 'content' => 'Assalaam studio' ],
        ];

        DB::table('posts')->insert($sample);
    }
}
