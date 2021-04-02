<?php

namespace Database\Factories;

use App\Models\Business;
use Illuminate\Database\Eloquent\Factories\Factory;

class BusinessFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Business::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'email' => $this->faker->unique()->companyEmail,
            'type' => 'food',
            'address' => $this->faker->address,
            'operator' => $this->faker->name,
            'location' => $this->faker->address,
            'mobile_no' => $this->faker->phoneNumber,
            'landline' => $this->faker->phoneNumber,
            'permit_issued_date' => now(),
            'permit_expiration_date' => now(),
            'owner_full_name' =>
            $this->faker->name,
            'owner_address' => $this->faker->address,
            'owner_details' => $this->faker->text,
        ];
    }
}
