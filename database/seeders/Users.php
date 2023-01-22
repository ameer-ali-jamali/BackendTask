<?php

namespace Database\Seeders;

use Faker\Factory as Random;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $random = Random::create();
        DB::table('users')->insert([
            [
                'name' => "Ahsan",
                'country' => "Pakistan",
                'category'  => "partTime",
                'password'  => bcrypt('user'),
            ],

            [
                'name' => "Jameel",
                'country' => "Armenia",
                'category'  => "hourly",
                'password'  => bcrypt('user'),
            ],
            [
                'name' => "Hameed",
                'country' => "Brazil",
                'category'  => "partTime",
                'password'  => bcrypt('user'),
            ]


        ]);
        DB::table('users')->insert([
            [
                'name' => "Hameed",
                'country' => "ghana",
                'category'  => "fullTime",
                'role' => 'company',
                'password'  => bcrypt('company'),
            ],
            [
                'name' => "Hameed",
                'country' => "Ukraine",
                'category'  => "fullTime",
                'role' => 'company',
                'password'  => bcrypt('company'),
            ],
        ]);
    }
}