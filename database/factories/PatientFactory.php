<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstname(),
            'surname' => $this->faker->lastname(),
            'tc_id' => $this->faker->unique()->numberBetween(10000000000, 99999999999),
            'email' => $this->faker->unique()->safeEmail(),
            'birth_date' => $this->faker->date('Y-m-d', '2005-01-01'),
            'phone' => $this->faker->numerify('5#########'),
        ];
    }
}
