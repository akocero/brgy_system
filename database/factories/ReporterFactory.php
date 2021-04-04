<?php

namespace Database\Factories;

use App\Models\Reporter;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReporterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reporter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name,
            'citizenship' => 'filipino',
            'gender' =>
            $this->faker->randomElement(['male', 'female']),
            'date_of_birth' => now(),
            'email' => $this->faker->email,
            'contact_no' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
        ];
    }
}
