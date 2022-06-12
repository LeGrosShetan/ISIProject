<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjouteFK extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Tournois', function (Blueprint $table) {
            $table->bigInteger('idJeu')->unsigned()->change();

            $table->foreign('idJeu')
                ->references('id')
                ->on('Jeux')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('Joueurs', function (Blueprint $table) {
            $table->bigInteger('idJeu')->unsigned()->change();

            $table->foreign('idJeu')
                ->references('id')
                ->on('Jeux')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Jeux', function (Blueprint $table) {
            //
        });
    }
}
