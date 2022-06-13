@extends('layouts.layout')

@section('titrePage')
    Liste des tournois
@endsection

@section('titreItem')
    <h1>Les tournois :</h1>
@endsection

@section('contenu')

    @if(session()->has('info'))
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-body">
                <p class="card-text">{{ session('info') }}</p>
            </div>
        </div>
    @endif

    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title">Voici les tournois de notre sélection :</h5>
        </header>
        <div class="card-content">
            <div class="content">
                <table class ="table is-hoverable">
                    <thead>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Jeu</th>
                        <th></th>
                        <th><a class="btn btn-warning btn-block" href="{{ route('tournois.create') }}">Ajouter</th>
                    </thead>
                    @foreach($tournois as $tournoi)
                        <tr>
                            <td>{{ $tournoi->id }}</td>
                            <td><strong>{{ $tournoi->nom }}</strong></td>
                            <td>{{ $tournoi->nomJeu }}</td>
                            <td><a class="btn btn-primary" href="{{ route('tournois.show', $tournoi->id)}}">Consulter</td>
                            <td>
                                <form action="{{ route('tournois.destroy', $tournoi->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection