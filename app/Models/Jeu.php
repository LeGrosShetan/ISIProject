<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Jeu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'editeur',
        'anneeSortie',
        'cashPrizeTotal',
        'nbTournois',
        'nomJoueur',
        'totalCashPrize',
    ];

    public function getAll(){
        $result = DB::table('Jeux')->join('Joueurs','Joueurs.id','=','Jeux.idTopPlayer')
        ->select('Jeux.id AS id','Jeux.nom as nom','editeur','anneeSortie', 'Jeux.cashPrizeTotal as cashPrizeTotal', 'Jeux.nbTournois as nbTournois', 'Joueurs.nom as nomJoueur', 'totalCashPrize')
        ->get();
        return $result;
    }
}
