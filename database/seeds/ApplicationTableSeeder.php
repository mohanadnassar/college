<?php

use Illuminate\Database\Seeder;

class ApplicationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applications')->insert([
            'usernamename' => str_random(10),
            'email' => str_random(10). '@gmail.com',
            'courses' => str_random(25),
            'phoneNumber' => random_int(max),
        ]);
        DB::table('applications')->insert([
            'usernamename' => str_random(10),
            'email' => str_random(10). '@gmail.com',
            'courses' => str_random(25),
            'phoneNumber' => random_int(max),
        ]);
        DB::table('applications')->insert([
            'usernamename' => str_random(10),
            'email' => str_random(10). '@gmail.com',
            'courses' => str_random(25),
            'phoneNumber' => random_int(max),
        ]);
        DB::table('applications')->insert([
            'usernamename' => str_random(10),
            'email' => str_random(10). '@gmail.com',
            'courses' => str_random(25),
            'phoneNumber' => random_int(max),
        ]);
        DB::table('applications')->insert([
            'usernamename' => str_random(10),
            'email' => str_random(10). '@gmail.com',
            'courses' => str_random(25),
            'phoneNumber' => random_int(max),
        ]);
    }
}
