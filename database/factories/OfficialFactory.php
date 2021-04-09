<?php

namespace Database\Factories;

use App\Models\Official;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfficialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Official::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'middle_name' => $this->faker->lastName,
            'suffix' => $this->faker->suffix,
            'gender' => 'male',
            'mobile_no' => $this->faker->phoneNumber,
            'position' => 'councilor',
            'committee' => 'de abswelto',
            'rank_no' => rand(1, 10),
            'remarks' => $this->faker->text,
        ];
    }
}
