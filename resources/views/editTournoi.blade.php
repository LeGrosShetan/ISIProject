@extends('layouts.layout')

@section('contenu')
<br>
    <div class="container">
        <div class="row card text-white bg-dark">
            <h4 class="card-header">Modifier un tournoi</h4>
            <div class="card-body">
                @auth
                    <form action="{{ route('tournois.update', $tournoi->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" value="{{$tournoi->nom}}" placeholder="Nom du tournoi">
                            @error('nom')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('annee') is-invalid @enderror" name="annee" id="annee" value="{{$tournoi->annee}}" placeholder="Année du tournoi">
                            @error('annee')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('cashprize') is-invalid @enderror" name="cashprize" id="cashprize" value="{{$tournoi->cashprize}}" placeholder="Somme mise en jeu pour le tournoi">
                            @error('cashprize')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('idJeu') is-invalid @enderror" name="idJeu" id="idJeu" value="{{$tournoi->idJeu}}" placeholder="L'id du jeu sur lequel le tournoi se passe">
                            @error('idJeu')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <button type="submit" class="btn btn-secondary">Envoyer !</button>
                    </form>
                    @else
                        <div>
                            <h5 class="card-header">Modification impossible !</h5>
                            <p class="card-body">Vous ne pouvez pas modifier d'élément sans être connecté !</p>
                        </div>
                    @endauth
            </div>
        </div>
    </div>
@endsection