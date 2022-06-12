<?php

namespace Database\Factories;

use app\Models\Jeu;
use Illuminate\Database\Eloquent\Factories\Factory;

class JeuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Jeu::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->sentence(1,false),
            'editeur' => $this->faker->sentence(1,false),
            'anneeSortie' => $this->faker->random_int(2000,2022),
            'cashPrizeTotal' => $this->faker->random_int(10,100000),
            'nbTournois' => $this->faker->random_int(1,600),
            'nomJoueur' => $this->faker->lastname,
            'totalCashPrize' => $this->faker->random_int(10,100000),
        ];
    }
}
