@extends('layouts.layout')

@section('titrePage')
    Détails du jeu :
@endsection

@section('contenu')

    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title"><strong>{{ $jeu[0]->nom }}</strong></h5>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Editeur : {{ $jeu[0]->editeur }}</p>
                <p>Année de sortie : {{ $jeu[0]->anneeSortie }}</p>
                <p>Cashprize total : {{ $jeu[0]->cashPrizeTotal }}</p>
                <p>Nombre de tournois : {{ $jeu[0]->nbTournois }}</p>
                <p>Nom du meilleur joueur : {{ $jeu[0]->nomJoueur }}</p>
                <p>Argent gagné par le meilleur joueur : {{ $jeu[0]->totalCashPrize }}</p>
            </div>
        </div>
    </div>

    
@endsection