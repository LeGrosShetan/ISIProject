<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Tournoi extends Model
{
    use HasFactory;

    protected $table = 'Tournois';

    protected $fillable = [
        'nom',
        'annee',
        'cashprize',
        'idJeu',
    ];

    public function getAll(){
        $result = DB::table('Tournois')->join('Jeux', 'Tournois.idJeu','=','Jeux.id')
        ->select('Tournois.id as id','Tournois.nom as nom','annee','cashprize','Jeux.nom as nomJeu')
        ->get();
        return $result;
    }

    public function jeu(){
        return $this->belongsTo(Jeu::class, 'idJeu');
    }
}
