<?php

namespace App\Http\Controllers;

use App\Models\Jeu;
use Illuminate\Http\Request;

class JeuController extends Controller
{
    public function index(){
        $jeu = new Jeu();
        $jeux = $jeu->getAll();
        return view('jeux', compact('jeux'));
    }
}