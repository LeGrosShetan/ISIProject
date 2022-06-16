@extends('layouts.layout')

@section('titrePage')
    Détails du jeu :
@endsection

@section('contenu')

    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title"><strong>{{ $jeu->nom }}</strong></h5>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Editeur : {{ $jeu->editeur }}</p>
                <p>Année de sortie : {{ $jeu->anneeSortie }}</p>
                <p>Cashprize total : {{ $jeu->cashPrizeTotal }}</p>
                <p>Nombre de tournois : {{ $jeu->nbTournois }}</p>
                <p>Nom du meilleur joueur : {{ $topPlayer->prenom }} {{ $topPlayer->nom }}</p>
                <p>Argent gagné par le meilleur joueur : {{ $topPlayer->totalCashPrize }}</p>
            </div>
        </div>
    </div>

    
@endsection