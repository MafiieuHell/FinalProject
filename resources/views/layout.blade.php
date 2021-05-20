<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laravel - @yield('title')</title>
        <link rel="stylesheet" href="bootstrap.bundle.min.js / bootstrap.bundle.js"/>        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />

        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous" defer></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" defer></script>
        <script src="{{ secure_asset('js/main.js') }}" defer></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{ route('posts.index') }}">Debug moi</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('home')}}">Accueil<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Questions</a>
                        </li>
                        @auth
                    <li class="nav-item">
                        <div class="dropdown">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Mon compte
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="{{route ('logout')}}">Deconexion</a>
                      
                          </div>
                        </div>
                    </li>   
                            <li class="nav-item">
                                <a href="#" class="nav-link">Utilisateurs</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{route('login')}}" class="nav-link">Connexion</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route ('register')}}" class="nav-link">Inscription</a>
                            </li>
                        @endauth
                    </ul>
                    @auth
                        <span class="navbar-text">
                            {{ auth()->user()->name }}
                        </span>
                    @else
                        <span class="navbar-text">
                            Vous n'êtes pas encore connecté
                        </span>
                    @endauth
                </div>
            </nav>
        </header>
        <main class="container my-3">
            @yield('content')
        </main>
    </body>
</html>
