<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
        'user_id' => integerValue(20),
            'title' => str_random(10),
            'description' => str_random(25),
        ]);
        DB::table('courses')->insert([
            'user_id' => integerValue(20),
            'title' => str_random(10),
            'description' => str_random(25),
        ]);
        DB::table('courses')->insert([
            'user_id' => integerValue(20),
            'title' => str_random(10),
            'description' => str_random(25),
        ]);
        DB::table('courses')->insert([
            'user_id' => integerValue(20),
            'title' => str_random(10),
            'description' => str_random(25),
        ]);
        DB::table('courses')->insert([
            'user_id' => integerValue(20),
            'title' => str_random(10),
            'description' => str_random(25),
        ]);

    }
}
