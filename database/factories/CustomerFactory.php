<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker::create('ru_RU');
        return [
            'name' => $faker->firstName(),
            'blocked' => $faker->boolean(),
            'surname' => $faker->lastName(),
            'phone' => $faker->phoneNumber(),
            'mail' => $faker->email()
        ];
    }
}
