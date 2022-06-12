<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Esport o max</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Accueil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Contenu
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{url('/jeux')}}">Jeux</a></li>
            <li><a class="dropdown-item" href="{{url('/tournois')}}">Tournois</a></li>
            <li><a class="dropdown-item" href="{{url('/joueurs')}}">Joueurs</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">A Propos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

        <title>
            @yield('titrePage')
        </title>
    </head>

    <body>
        <header>
            @yield('titreItem')
        </header>
        @yield('contenu')
        <footer class="footer">
            EsportWeb - copyright SchwaederPoiret - 2022
        </footer>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    </body>
</html>