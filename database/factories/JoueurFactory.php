<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JoueurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastname,
            'prenom' => $this->faker->lastname,
            'nbTournois' => $this->faker->random_int(1,600),
            'totalCashPrize' => $this->faker->random_int(10,100000),
            'nomJeu' => $this->faker->sentence(1,false),
        ];
    }
}
