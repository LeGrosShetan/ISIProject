@extends('layouts.layout')

@section('titrePage')
    Liste des tournois
@endsection

@section('titreItem')
    <h1>Les tournois :</h1>
@endsection

@section('contenu')
<table class ="table table-bordered table-striped">
    <thead>
        <th>ID</th>
        <th>Nom</th>
        <th>Année</th>
        <th>Cashprize Total</th>
        <th>Jeu</th>
    </thead>
    @foreach($tournois as $tournoi)
        <tr>
            <td>{{ $tournoi->id }}</td>
            <td>{{ $tournoi->nom }}</td>
            <td>{{ $tournoi->annee }}</td>
            <td>{{ $tournoi->cashprize }}</td>
            <td>{{ $tournoi->nomJeu }}</td>
        </tr>
    @endforeach
</table>
@endsection