<?php

namespace App\Http\Controllers;

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
}
