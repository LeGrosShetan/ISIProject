@extends('layouts.layout')

@section('contenu')
<br>
    <div class="container">
        <div class="row card text-white bg-dark">
            <h4 class="card-header">Modifier un jeu</h4>
            <div class="card-body">
                @auth
                    <form action="{{ route('jeux.update', $jeu->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" value="{{ $jeu->nom}}" placeholder="Nom du jeu">
                            @error('nom')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('editeur') is-invalid @enderror" name="editeur" id="editeur" value="{{ $jeu->editeur}}" placeholder="Editeur du jeu">
                            @error('editeur')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('anneeSortie') is-invalid @enderror" name="anneeSortie" id="anneSortie" value="{{$jeu->anneeSortie}}" placeholder="Année de sortie du jeu">
                            @error('anneeSortie')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('cashPrizeTotal') is-invalid @enderror" name="cashPrizeTotal" id="cashPrizeTotal" value="{{$jeu->cashPrizeTotal }}" placeholder="Somme des cashprizes des tournois sur ce jeu">
                            @error('cashPrizeTotal')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('nbTournois') is-invalid @enderror" name="nbTournois" id="nbTournois" value="{{$jeu->nbTournois}}" placeholder="Nombre de tournois sur ce jeu">
                            @error('nbTournois')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('idTopPlayer') is-invalid @enderror" name="idTopPlayer" id="idTopPlayer" value="{{$jeu->idTopPlayer}}" placeholder="L'id du meilleur joueur">
                            @error('idTopPlayer')
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