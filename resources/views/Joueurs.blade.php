@extends('layouts.layout')

@section('titrePage')
    Liste des joueurs
@endsection

@section('titreItem')
    <h1>Les joueurs :</h1>
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
            <h5 class="card-header-title">Voici les joueurs de notre sélection :</h5>
        </header>
        <div class="card-content">
            <div class="content">
                <table class ="table is-hoverable">
                    <thead>
                        <th>#</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Jeu</th>
                        <th></th>
                        <th></th>
                    </thead>
                    @foreach($joueurs as $joueur)
                        <tr>
                            <td>{{ $joueur->id }}</td>
                            <td><strong>{{ $joueur->prenom }}</strong></td>
                            <td>{{ $joueur->nom }}</td>
                            <td>{{ $joueur->nomJeu }}</td>
                            <td><a class="btn btn-primary" href="{{ route('joueurs.show', $joueur->id)}}">Consulter</td>
                            <td>
                                <form action="{{ route('joueurs.destroy', $joueur->id) }}" method="post">
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