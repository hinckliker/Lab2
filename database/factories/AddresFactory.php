<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Addres>
 */
class AddresFactory extends Factory
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
            'name' => $faker->name(),
            'town' => $faker->city(),
            'street' => $faker->streetName(),
            'house' => $faker->numberBetween(int1: 1,int2: 1000),
            'floor' => $faker->numberBetween(int1: 1,int2: 100),
            'password' => $faker->postcode()
        ];
    }
}
