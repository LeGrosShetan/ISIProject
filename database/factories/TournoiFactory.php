<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TournoiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->sentence(1,false),
            'année' => $this->faker->random_int(2000,2022),
            'cashprize' => $this->faker->random_int(10,100000),
            'nomJeu' => $this->faker->sentence(1,false),
        ];
    }
}
