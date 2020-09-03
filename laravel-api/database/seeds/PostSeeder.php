<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //    DB::table('posts')->insert([
    //        'title' => Str::random(10),
    //        'content' => Str::random(10)
    //    ]);
    DB::table('post')->insert([
        'title' => Str::random(10),
        'content' => Str::random(10).'@gmail.com'
    ]);
    }
}
