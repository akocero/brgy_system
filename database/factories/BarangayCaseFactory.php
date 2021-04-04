<?php

namespace Database\Factories;

use App\Models\BarangayCase;
use Illuminate\Database\Eloquent\Factories\Factory;

class BarangayCaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BarangayCase::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subject_person' => $this->faker->name,
            'issued_date' => now(),
            'appearance_date' => now(),
            'time' => date('H:s:m'),
            'remarks' => $this->faker->text,
            'summon_purpose' => $this->faker->sentence,
            'summon_body' => $this->faker->text,
        ];
    }
}
