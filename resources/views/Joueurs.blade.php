@extends('layouts.layout')

@section('titrePage')
    Liste des joueurs
@endsection

@section('titreItem')
    <h1>Les joueurs :</h1>
@endsection

@section('contenu')
<table class ="table table-bordered table-striped">
    <thead>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Tournois participés</th>
        <th>Cashprize Total</th>
        <th>Jeu Principal</th>
    </thead>
    @foreach($joueurs as $joueur)
        <tr>
            <td>{{ $joueur->id }}</td>
            <td>{{ $joueur->nom }}</td>
            <td>{{ $joueur->prenom }}</td>
            <td>{{ $joueur->nbTournois }}</td>
            <td>{{ $joueur->totalCashPrize }}</td>
            <td>{{ $joueur->nomJeu }}</td>
        </tr>
    @endforeach
</table>
@endsection