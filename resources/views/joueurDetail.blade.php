@extends('layouts.layout')

@section('titrePage')
    Détails du joueur :
@endsection

@section('contenu')

    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title"><strong>{{ $joueur->prenom }} {{ $joueur->nom }}</strong></h5>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Nombre de tournois : {{ $joueur->nbTournois }}</p>
                <p>Cashprize gagné : {{ $joueur->totalCashPrize }}</p>
                <p>Jeu : {{ $nomJeu }}</p>
            </div>
        </div>
    </div>

    
@endsection