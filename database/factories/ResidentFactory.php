<?php

namespace Database\Factories;

use App\Models\Resident;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ResidentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Resident::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'household_id' => rand(1, 20),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'middle_name' => $this->faker->lastName,
            'suffix' => $this->faker->title,
            'address' => $this->faker->address,
            'gender' => 'male',
            'mobile_no' => $this->faker->phoneNumber,
            'landline' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'place_of_birth' => $this->faker->country,
            'occupation' => 'male',
            'civil_status' => 'single',
            'citizenship' => $this->faker->country,
        ];
    }
}
