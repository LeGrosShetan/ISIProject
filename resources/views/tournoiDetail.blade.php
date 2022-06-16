@extends('layouts.layout')

@section('titrePage')
    Détails du tournoi :
@endsection

@section('contenu')

    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title"><strong>{{ $tournoi->nom }}</strong></h5>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Jeu : {{ $nomJeu }}</p>
                <p>Année du tournoi : {{ $tournoi->annee }}</p>
                <p>Cashprize en jeu : {{ $tournoi->cashprize }}</p>
            </div>
        </div>
    </div>

    
@endsection