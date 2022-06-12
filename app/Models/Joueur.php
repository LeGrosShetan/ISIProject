<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Joueur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'nbTournois',
        'totalCashPrize',
        'nomJeu',
    ];

    public function getAll(){
        $result = DB::table('Joueurs')->join('Jeux', 'Joueurs.idJeu','=','Jeux.id')
        ->select('Joueurs.id as id','Joueurs.nom as nom','prenom','Joueurs.nbTournois as nbTournois','totalCashPrize','Jeux.nom as nomJeu')
        ->get();
        return $result;
    }
}