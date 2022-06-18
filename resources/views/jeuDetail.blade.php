@extends('layouts.layout')

@section('titrePage')
    Détails du jeu :
@endsection

@section('contenu')

    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title"><strong>{{ $jeu->nom }}</strong></h5>
        </header>
        <div class="card-content">
             <div class="content">
                    <p>Editeur : {{ $jeu->editeur }}</p>
                    <p>Année de sortie : {{ $jeu->anneeSortie }}</p>
                    <p>Cashprize total : {{ $jeu->cashPrizeTotal }}</p>
                    <p>Nombre de tournois : {{ $jeu->nbTournois }}</p>
                    <p>Nom du meilleur joueur : 
                        @if(is_null($topPlayer))
                            {{ "Aucun meilleur joueur" }}
                        @else
                            {{ $topPlayer->prenom }} {{ $topPlayer->nom }}
                        @endif
                    </p>
                    <p>Argent gagné par le meilleur joueur : 
                        @if(is_null($topPlayer))
                            {{ "/" }}
                        @else
                            {{ $topPlayer->totalCashPrize }}
                        @endif
                    </p>
                    
                    <h5>Nom des joueurs</h5>
                    <p>
                        @foreach($joueurs as $joueur)
                            @if ($loop->last)
                                {{  $joueur->prenom  }} {{  $joueur->nom  }}
                            @else
                                {{  $joueur->prenom  }} {{  $joueur->nom  }},
                            @endif
                        @endforeach
                    </p>

                    <h5>Tournois</h5>
                    <p>
                    @foreach($tournois as $tournoi)
                        @if ($loop->last)
                            {{  $tournoi->nom  }}
                        @else
                            {{  $tournoi->nom  }},
                        @endif
                    @endforeach
                    </p>
                </tr>
            </div>
        </div>
    </div>

    
@endsection