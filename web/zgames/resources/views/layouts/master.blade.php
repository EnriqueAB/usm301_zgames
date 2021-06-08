<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('home')}}">Z Games</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Agregar Consola</a>
                        <a class="nav-link" href="{{route('ver_consolas')}}">Ver Consolas</a>
                        <a class="nav-link" href="{{route('ver_juegos')}}">Ver Juegos</a>
                        <a class="nav-link" href="{{route('agregar_juego')}}">Agregar Juego</a>

                    </div>
                </div>
            </div>
        </nav>

    </header>
    <main class="container-fluid">
        @yield("contenido")
    </main>

  </body>
</html>