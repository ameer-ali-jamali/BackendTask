<?php

namespace Database\Seeders;

use Faker\Factory as Random;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $random = Random::create();
        for ($count = 1; $count <= 10; $count++) {
            DB::table('posts')->insert([
                'userId' => (rand(1, 20)),
                'title' => $random->title(),
                'time'  => "Full Time",
                'price'  => "$" . (rand(1, 10)),
                'hr'  => "hr",
                'country'  => $random->country(),
                'description'  =>  $random->asciify('Random Character For Testing'),
            ]);
            // DB::table('posts')->insert([
            //     'userId' => (rand(1, 13)),
            //     'title' => $random->title(),
            //     'time'  => "Full Time",
            //     'price'  => "$" . (rand(1, 10)),
            //     'hr'  => "hr",
            //     'description'  =>  $random->asciify('Random Character For Testing'),
            // ]);
        }
    }
}