<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJoueurRequest;
use App\Http\Requests\UpdateJoueurRequest;
use App\Models\Joueur;

class JoueurController extends Controller
{
    public function index(){
        $joueur = new Joueur();
        $joueurs = $joueur->getAll();
        return view('Joueurs', compact('joueurs'));
    }
}
