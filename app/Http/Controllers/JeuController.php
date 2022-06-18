<?php

namespace App\Http\Controllers;

use App\Models\Jeu;
use App\Http\Requests\insertJeuRequest;
use App\Http\Requests\StoreJeuRequest;
use App\Http\Requests\UpdateJeuRequest;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;

class JeuController extends Controller
{
    public function index(){
        $jeu = new Jeu();
        $jeux = $jeu->getAll();
        return view('jeux', compact('jeux'));
    }

    public function show(int $idJeu){
        $jeu = Jeu::find($idJeu);
        $topPlayer = $jeu->topPlayer;
        $joueurs = $jeu->joueurs;
        $tournois = $jeu->tournois;
        return view('jeuDetail', compact('jeu','topPlayer','joueurs','tournois'));
    }

    public function edit(int $idJeu){
        $jeu = Jeu::find($idJeu);
        return view('editJeu', compact('jeu'));
    }

    public function update(insertJeuRequest $request, int $idJeu){
        $jeu = Jeu::find($idJeu);
        $jeu->update($request->all());
        return view('confirm');
    }

    public function destroy(int $idJeu){
        Jeu::destroy($idJeu);
        return back()->with('info', 'Jeu supprimé !');
    }

    public function deniedDestroy(){
        return back()->with('info', 'Impossible de supprimer un jeu sans être connecté !');
    }

    public function create(){
        return view('createJeu');
    }

    public function store(insertJeuRequest $request){
        Jeu::create($request->all());
        return view('confirm');
    }
}