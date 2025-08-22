<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body>

<link href="https://fonts.googleapis.com/css2?family=Rationale&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: "Rationale", sans-serif;
        }

    </style>

    <div class="container mt-5">

        <h1>📊 Dashboard</h1>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title text-center"><b>⚽ Gestion de Equipos</b></h5>
        <p class="card-text">Administra la información de los equipos, incluyendo nombre, ciudad, país, fecha de fundación y liga a la que pertenecen.</p>
        <a href="{{ route('equipos.index') }}" class="btn btn-outline-primary">Ir a Equipos ➡️</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title text-center"><b>👥 Gestion de Jugadores</b></h5>
        <p class="card-text">Administra la información de los jugadores, incluyendo nombre, apellido, edad, posición, equipo y número de camiseta.</p>
        <a href="{{ route('Jugadores.index') }}" class="btn btn-outline-primary">Ir a Jugadores ➡️</a>
        </div>
    </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>