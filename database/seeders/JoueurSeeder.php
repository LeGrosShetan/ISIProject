<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JoueurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \app\Models\Joueur::factory(20)->create();
    }
}
