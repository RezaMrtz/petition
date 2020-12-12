<?php

namespace Database\Seeders;

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
        $this->call([
            //FIXME: db:seedSegmentation fault
            UserSeeder::class,
            TopicSeeder::class,
            TagSeeder::class,
            SignSeeder::class,
            PhotoSeeder::class,
            PetitionSeeder::class,
            CommentSeeder::class,
        ]);
    }
}