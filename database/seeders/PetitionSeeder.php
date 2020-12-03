<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Petition::factory(30)->create();
    }
}
