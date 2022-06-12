<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JeuMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Jeux', function (Blueprint $table) {
            $table->id();
            $table->text('nom');
            $table->text('editeur');
            $table->integer('anneeSortie');
            $table->text('cashPrizeTotal');
            $table->integer('nbTournois');
            $table->integer('idTopPlayer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Jeux');
    }
}
