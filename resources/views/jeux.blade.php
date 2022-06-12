@extends('layouts.layout')

@section('titrePage')
    Liste des jeux
@endsection

@section('titreItem')
    <h1>Les jeux :</h1>
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
            <h5 class="card-header-title">Voici les jeux de notre sélection :</h5>
        </header>
        <div class="card-content">
            <div class="content">
                <table class ="table is-hoverable">
                    <thead>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Cashprize Total</th>
                        <th>Nombre de Tournois</th>
                        <th></th>
                        <th></th>
                    </thead>
                    @foreach($jeux as $jeu)
                        <tr>
                            <td>{{ $jeu->id }}</td>
                            <td><strong>{{ $jeu->nom }}</strong></td>
                            <td>{{ $jeu->cashPrizeTotal }}</td>
                            <td>{{ $jeu->nbTournois }}</td>
                            <td><a class="btn btn-primary" href="{{ route('jeux.show', $jeu->id)}}">Consulter</td>
                            <td>
                                <form action="{{ route('jeux.destroy', $jeu->id) }}" method="post">
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