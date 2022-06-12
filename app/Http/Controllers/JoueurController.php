<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJoueurRequest;
use App\Http\Requests\UpdateJoueurRequest;
use App\Models\Joueur;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;

class JoueurController extends Controller
{
    public function index(){
        $joueur = new Joueur();
        $joueurs = $joueur->getAll();
        return view('Joueurs', compact('joueurs'));
    }

    public function show(int $id){
        $temp = new Joueur();
        $joueur = $temp->get($id);
        return view('joueurDetail', compact('joueur'));
    }

    public function destroy(Joueur $joueur){
        $joueur->delete();
        return back()->with('info', 'Joueur supprimé !');
    }
}
