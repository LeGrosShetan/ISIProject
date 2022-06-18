@extends('layouts.layout')

@section('contenu')
<br>
    <div class="container">
        <div class="row card text-white bg-dark">
            <h4 class="card-header">Modifier un joueur</h4>
            <div class="card-body">
                @auth
                    <form action="{{ route('joueurs.update', $joueur->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" id="prenom" value="{{$joueur->prenom}}" placeholder="Prenom du joueur">
                            @error('prenom')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" value="{{$joueur->nom}}" placeholder="Nom du joueur">
                            @error('nom')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('nbTournois') is-invalid @enderror" name="nbTournois" id="nbTournois" value="{{$joueur->nbTournois}}" placeholder="Nombre de tournois participés par le joueur">
                            @error('nbTournois')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('totalCashPrize') is-invalid @enderror" name="totalCashPrize" id="totalCashPrize" value="{{$joueur->totalCashPrize}}" placeholder="Somme des cashprizes gagnés par le joueur">
                            @error('totalCashPrize')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('idJeu') is-invalid @enderror" name="idJeu" id="idJeu" value="{{$joueur->idJeu}}" placeholder="L'id du jeu sur lequel joue le joueur">
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