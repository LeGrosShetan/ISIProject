<?php

namespace App\Http\Controllers;

use App\Http\Requests\insertJoueurRequest;
use App\Http\Requests\StoreJoueurRequest;
use App\Http\Requests\UpdateJoueurRequest;
use App\Models\Joueur;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;

class JoueurController extends Controller
{
    public function index(){
        $joueurs = Joueur::all();
        return view('Joueurs', compact('joueurs'));
    }

    public function show(int $id){
        $joueur = Joueur::find($id);
        $nomJeu = $joueur->jeu->nom;
        return view('joueurDetail', compact('joueur','nomJeu'));
    }

    public function edit(int $idJoueur){
        $joueur = Joueur::find($idJoueur);
        return view('editJoueur', compact('joueur'));
    }

    public function update(insertJoueurRequest $request, int $idJoueur){
        $joueur = Joueur::find($idJoueur);
        $joueur->update($request->all());
        return view('confirm');
    }

    public function destroy(int $idJoueur){
        Joueur::destroy($idJoueur);
        return back()->with('info', 'Joueur supprimé !');
    }

    public function create(){
        return view('createJoueur');
    }

    public function store(insertJoueurRequest $request){
        Joueur::create($request->all());
        return view('confirm');
    }
}
