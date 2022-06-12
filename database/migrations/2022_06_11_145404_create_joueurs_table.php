<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoueursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Joueurs', function (Blueprint $table) {
            $table->id();
            $table->text('nom');
            $table->text('prenom');
            $table->integer('nbTournois');
            $table->text('totalCashPrize');
            $table->unsignedBigInteger('idJeu');
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
        Schema::dropIfExists('joueurs');
    }
}
