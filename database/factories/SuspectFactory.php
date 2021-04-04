<?php

namespace Database\Factories;

use App\Models\Suspect;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuspectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Suspect::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name,
            'citizenship' => $this->faker->country,
            'gender' => 'male',
            'date_of_birth' => now(),
            'email' => $this->faker->email,
            'contact_no' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'work_address' => $this->faker->address,
            'description' => $this->faker->text,
            'remarks' => $this->faker->text,
        ];
    }
}
