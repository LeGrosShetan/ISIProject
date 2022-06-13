@extends('layouts.layout')

@section('contenu')
<br>
    <div class="container">
        <div class="row card text-white bg-dark">
            <h4 class="card-header">Ajouter un jeu</h4>
            <div class="card-body">
                @auth
                    <form action="{{ route('jeux.store') }}" method="POST">
                        @csrf
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Nom du jeu">
                            @error('nom')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('editeur') is-invalid @enderror" name="editeur" id="editeur" placeholder="Editeur du jeu">
                            @error('editeur')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('anneeSortie') is-invalid @enderror" name="anneeSortie" id="anneSortie" placeholder="Année de sortie du jeu">
                            @error('anneeSortie')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('cashPrizeTotal') is-invalid @enderror" name="cashPrizeTotal" id="cashPrizeTotal" placeholder="Somme des cashprizes des tournois sur ce jeu">
                            @error('cashPrizeTotal')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('nbTournois') is-invalid @enderror" name="nbTournois" id="nbTournois" placeholder="Nombre de tournois sur ce jeu">
                            @error('nbTournois')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control @error('idTopPlayer') is-invalid @enderror" name="idTopPlayer" id="idTopPlayer" placeholder="L'id du meilleur joueur">
                            @error('idTopPlayer')
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