<?php

namespace Database\Seeders;

use App\Models\Reporter;
use App\Models\Suspect;
use App\Models\Victim;
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
        \App\Models\Official::factory(10)->create();
        \App\Models\BarangayCase::factory(10)->create();
        \App\Models\Resolution::factory(10)->create();
        \App\Models\Purok::factory(10)->create();
        \App\Models\Blotter::factory(20)->create();
    }
}
