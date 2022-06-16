<?php

namespace App\Http\Controllers;

use App\Http\Requests\insertTournoiRequest;
use App\Http\Requests\StoreTournoiRequest;
use App\Http\Requests\UpdateTournoiRequest;
use App\Models\Tournoi;
use DB;

class TournoiController extends Controller
{
    public function index(){
        $tournoi = new Tournoi();
        $tournois = $tournoi->getAll();
        return view('Tournois', compact('tournois'));
    }

    public function show(int $id){
        $tournoi = Tournoi::find($id);
        $nomJeu = $tournoi->jeu->nom;
        return view('tournoiDetail', compact('tournoi', 'nomJeu'));
    }

    public function destroy(int $idTournoi){
        Tournoi::destroy($idTournoi);
        return back()->with('info', 'Tournoi supprimé !');
    }

    public function create(){
        return view('createTournoi');
    }

    public function store(insertTournoiRequest $request){
        Tournoi::create($request->all());
        return view('confirm');
    }
}
