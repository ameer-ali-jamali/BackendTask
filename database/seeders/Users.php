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
        for ($count = 0; $count <= 10; $count++) {
            DB::table('users')->insert([
                'name' => $random->name(),
                'country' => $random->country(),
                'category'  => "full Time",
                'password'  => bcrypt('user'),
            ]);
            DB::table('users')->insert([
                'name' => $random->name(),
                'country' => $random->country(),
                'category'  => "Company",
                'role'  => "company",
                'password'  => bcrypt('company'),
            ]);
        }
    }
}