@extends('layouts.layout')

@section('titrePage')
    Détails du tournoi :
@endsection

@section('contenu')

    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title"><strong>{{ $tournoi[0]->nom }}</strong></h5>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Jeu : {{ $tournoi[0]->nomJeu }}</p>
                <p>Année du tournoi : {{ $tournoi[0]->annee }}</p>
                <p>Cashprize en jeu : {{ $tournoi[0]->cashprize }}</p>
            </div>
        </div>
    </div>

    
@endsection