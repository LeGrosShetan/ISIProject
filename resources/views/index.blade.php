@extends('layouts.layout')

@section('titrePage')
    Liste des jeux
@endsection

@section('titreItem')
    <h1>Les jeux :</h1>
@endsection

@section('contenu')
<table class ="table table-bordered table-striped">
    <thead>
        <th>ID</th>
        <th>Nom</th>
        <th>Editeur</th>
        <th>Année de Sortie</th>
        <th>Cashprize Total</th>
        <th>Nombre de Tournois</th>
        <th>Top Player</th>
        <th>Cashprize Top Player</th>
    </thead>
    @foreach($jeux as $jeu)
        <tr>
            <td>{{ $jeu->idJeu }}</td>
            <td>{{ $jeu->nomJeu }}</td>
            <td>{{ $jeu->editeur }}</td>
            <td>{{ $jeu->anneeSortie }}</td>
            <td>{{ $jeu->cashPrizeTotalJeu }}</td>
            <td>{{ $jeu->nbTournoisJeu }}</td>
            <td>{{ $jeu->nomJoueur }}</td>
            <td>{{ $jeu->totalCashPrize }}</td>
        </tr>
    @endforeach
</table>
@endsection