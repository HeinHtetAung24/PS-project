<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'category' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'price' => '$20',
            'owner' => $this->faker->name,
        ];
    }
}
