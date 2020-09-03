<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // $this->call(PostSeeder::class);
        DB::table('post')->insert([
            'title' => Str::random(10),
            'content' => Str::random(10).'@gmail.com'
        ]);
    }
}
