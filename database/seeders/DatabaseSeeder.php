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
        \App\Models\User::factory(10)->create();
        \App\Models\Household::factory(20)->create();
        \App\Models\Resident::factory(100)->create();
        \App\Models\Business::factory(50)->create();
    }
}
