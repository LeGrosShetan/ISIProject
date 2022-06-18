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
        $tournois = Tournoi::all();
        return view('Tournois', compact('tournois'));
    }

    public function show(int $id){
        $tournoi = Tournoi::find($id);
        $nomJeu = $tournoi->jeu->nom;
        return view('tournoiDetail', compact('tournoi', 'nomJeu'));
    }

    public function edit(int $idTournoi){
        $tournoi = Tournoi::find($idTournoi);
        return view('editTournoi', compact('tournoi'));
    }

    public function update(insertTournoiRequest $request, int $idTournoi){
        $tournoi = Tournoi::find($idTournoi);
        $tournoi->update($request->all());
        return view('confirm');
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
