<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JeuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \app\Models\Jeu::factory(5)->create();
    }
}
