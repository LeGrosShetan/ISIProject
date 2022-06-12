<?php

namespace App\Http\Controllers;

use App\Models\Jeu;
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
        $temp = new Jeu();
        $jeu = $temp->get($idJeu);
        return view('jeuDetail', compact('jeu'));
    }

    public function destroy(Jeu $jeu){
        $jeu->delete();
        return back()->with('info', 'Jeu supprimé !');
    }
}