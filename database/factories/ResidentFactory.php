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
            'household_id' => rand(1, 50),
            'purok_id' => rand(1, 10),

            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'middle_name' => $this->faker->lastName,
            'suffix' => $this->faker->suffix,
            'nick_name' => $this->faker->streetName,
            'address' => $this->faker->address,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'spouse_name' => $this->faker->name,
            'date_of_birth' => now(),
            'place_of_birth' => $this->faker->country,
            'citizenship' => $this->faker->country,
            'resident_status' => 'permanent',
            'civil_status' => $this->faker->randomElement(['single', 'married']),
            'religion' => 'christian',

            'mobile_no' => $this->faker->phoneNumber,
            'landline' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,

            // 'is_voter' => $this->faker->phoneNumber,
            // 'precinct_no' => $this->faker->phoneNumber,

            // 'complexion' => $this->faker->phoneNumber,
            'blood_type' => 'O',
            'remarks' => $this->faker->text,

            'employment_status' => 'employed',
            'occupation' => $this->faker->jobTitle,

            // 'educational_attainment' => $this->faker->jobTitle,
        ];
    }
}
