<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Asimovian&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: "Asimovian", sans-serif;
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>
<body>
        <div class="container">
            @yield('content')
        </div>
        
        
        <footer>
            <p class="alert alert-dark text-muted text-center">
                &copy; 2025 - Sistema de Gestion de Equipos y Jugadores
            </p>
        </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>       
</body>
</html>