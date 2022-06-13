<?php

namespace App\Http\Controllers;

use App\Http\Requests\insertTournoiRequest;
use App\Http\Requests\StoreTournoiRequest;
use App\Http\Requests\UpdateTournoiRequest;
use App\Models\Tournoi;

class TournoiController extends Controller
{
    public function index(){
        $tournoi = new Tournoi();
        $tournois = $tournoi->getAll();
        return view('Tournois', compact('tournois'));
    }

    public function show(int $id){
        $temp = new Tournoi();
        $tournoi = $temp->get($id);
        return view('tournoiDetail', compact('tournoi'));
    }

    public function destroy(Tournoi $tournoi){
        $tournoi->delete();
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
