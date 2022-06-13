@extends('layouts.layout')

@section('contenu')
<br>
    <div class="container">
        <div class="row card text-white bg-dark">
            <h4 class="card-header">Ajouter un tournoi</h4>
            <div class="card-body">
                @auth
                    <form action="{{ route('tournois.store') }}" method="POST">
                        @csrf
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Nom du tournoi">
                            @error('nom')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('annee') is-invalid @enderror" name="annee" id="annee" placeholder="Année du tournoi">
                            @error('annee')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('cashprize') is-invalid @enderror" name="cashprize" id="cashprize" placeholder="Somme mise en jeu pour le tournoi">
                            @error('cashprize')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('idJeu') is-invalid @enderror" name="idJeu" id="idJeu" placeholder="L'id du jeu sur lequel le tournoi se passe">
                            @error('idJeu')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <button type="submit" class="btn btn-secondary">Envoyer !</button>
                    </form>
                    @else
                        <div>
                            <h5 class="card-header">Création impossible !</h5>
                            <p class="card-body">Vous ne pouvez pas créer d'élément sans être connecté !</p>
                        </div>
                    @endauth
            </div>
        </div>
    </div>
@endsection