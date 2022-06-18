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
        $result = DB::table('Jeux')
        ->select('Jeux.id AS id','Jeux.nom as nom','editeur','anneeSortie', 'Jeux.cashPrizeTotal as cashPrizeTotal', 'Jeux.nbTournois as nbTournois')
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
        if(Joueur::find($this->idTopPlayer) == null){
            $joueurs = $this->joueurs()->get();

            $max = 0;
            $indiceMax = 0;
            $i=0;

            foreach($joueurs as $joueur){
                $cash = $joueur->totalCashPrize;

                $int = (int) filter_var($cash, FILTER_SANITIZE_NUMBER_INT);
                
                error_log($int);
                
                if($int > $max){
                    $max = $int;
                    $indiceMax = $i;
                }

                $i++;
            }
            if($indiceMax != 0){
                $this->idTopPlayer = $joueurs[$indiceMax]->id;
            }
        }
        return $this->hasOne(Joueur::class,'id', 'idTopPlayer');
    }

}
