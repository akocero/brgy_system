<?php

namespace Database\Factories;

use App\Models\Blotter;
use App\Models\Reporter;
use App\Models\Suspect;
use App\Models\Victim;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlotterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blotter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'suspect_id' => Suspect::factory(),
            'victim_id' => Victim::factory(),
            'reporter_id' => Reporter::factory(),
            'incident_type' => 'debt',
            'blotter_entry_no' => Str::random(10),
            'reported_date_time' => now(),
            'incident_location' => $this->faker->streetName,
            'incident_date_time' => now(),
            'incident_details' => $this->faker->text,
        ];
    }
}
