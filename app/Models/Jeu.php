<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Jeu extends Model
{
    use HasFactory;

    protected $table = 'Jeux';

    protected $fillable = [
        'nom',
        'editeur',
        'anneeSortie',
        'cashPrizeTotal',
        'nbTournois',
        'nomJoueur',
        'totalCashPrize',
        'idTopPlayer',
    ];

    public function getAll(){
        $result = DB::table('Jeux')->join('Joueurs','Joueurs.id','=','Jeux.idTopPlayer')
        ->select('Jeux.id AS id','Jeux.nom as nom','editeur','anneeSortie', 'Jeux.cashPrizeTotal as cashPrizeTotal', 'Jeux.nbTournois as nbTournois', 'Joueurs.nom as nomJoueur', 'totalCashPrize')
        ->get();
        return $result;
    }

    public function joueurs(){
        return $this->hasMany(Joueur::class,'idJeu');
    }

    public function tournois(){
        return $this->hasMany(Tournoi::class,'idJeu');
    }

    public function topPlayer(){
        return $this->hasOne(Joueur::class,'id', 'idTopPlayer');
    }

}
