@extends('layouts.layout')

@section('titrePage')
    Détails du joueur :
@endsection

@section('contenu')

    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title"><strong>{{ $joueur[0]->prenom }} {{ $joueur[0]->nom }}</strong></h5>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Nombre de tournois : {{ $joueur[0]->nbTournois }}</p>
                <p>Cashprize gagné : {{ $joueur[0]->totalCashPrize }}</p>
                <p>Jeu : {{ $joueur[0]->nomJeu }}</p>
            </div>
        </div>
    </div>

    
@endsection