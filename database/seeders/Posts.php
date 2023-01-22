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
        DB::table('posts')->insert([

            [
                'userId' => "5",
                'title' => "Static Website Developer",
                'time'  => "parttime",
                'price'  => "$70",
                'country'  => "Ukraine",
                'first_skill'  => 'Html',
                'description'  =>  'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, illo!',
            ],
            [
                'userId' => "3",
                'title' => "Front-end Developer",
                'time'  => "hourly",
                'price'  => "$30",
                'country'  => "Brazil",
                'first_skill'  => 'Css',
                'description'  =>  'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, illo!',
            ],
            [
                'userId' => "1",
                'title' => "Php Expert",
                'time'  => "parttime",
                'price'  => "$50",
                'country'  => "Pakistan",
                'first_skill'  => 'Php',
                'description'  =>  'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, illo!',
            ],
            [
                'userId' => "4",
                'title' => "Wordpress Developer",
                'time'  => "fulltime",
                'price'  => "$100",
                'country'  => "Ghana",
                'first_skill'  => 'Wordpress',
                'description'  =>  'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, illo!',
            ],
            [
                'userId' => "2",
                'title' => "Javascript Expert",
                'time'  => "fulltime",
                'price'  => "$89",
                'country'  => "Armenia",
                'first_skill'  => 'Javascript',
                'description'  =>  'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, illo!',
            ],


        ]);
    }
}