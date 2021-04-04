<?php

namespace Database\Factories;

use App\Models\Resolution;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use Stringable;

class ResolutionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Resolution::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'number' => Str::random(10),
            'session_date' => now(),
            'author' => $this->faker->name,
            'co_author' => $this->faker->name,
            'forwarded_to' => $this->faker->company,
            'summary' => $this->faker->text,
            'remarks' => $this->faker->text,
        ];
    }
}
