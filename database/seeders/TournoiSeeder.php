<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TournoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \app\Models\Tournoi::factory(20)->create();
    }
}
