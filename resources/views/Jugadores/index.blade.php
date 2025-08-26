<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    
    <title>Jugadores</title>
    
</head>

<body>

    <link href="https://fonts.googleapis.com/css2?family=Rationale&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: "Rationale", sans-serif;
        }

    </style>

<div class="container">

    <div class="row">
        <div class="col-md-12 text-center">

            <h1>👥🏃🏾‍♂️ <b>Jugadores</b></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-end">
            <a href="{{ route('Jugadores.create') }}" class="btn btn-outline-success">➕ Añadir Jugadores</a>
        </div>
    </div>


    <div>
        <table class="table table-striped" >
            <tr class="table-secondary">
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha Nacimiento</th>
                <th>Nacionalidad</th>
                <th>Posición</th>
                <th>Número Camiseta</th>
                <th>Fecha Contratación</th>
                <th>Salario</th>
                <th>Equipo</th>
                <th>Acciones</th>

            </tr>
            @foreach ($jugadores as $jugador)
            <tr class="table-light">
                <td>{{ $jugador->id }}</td>
                <td>{{ $jugador->nombreJugador }}</td>
                <td>{{ $jugador->apellidoJugador }}</td>
                <td>{{ $jugador->fechaNacimientoJugador }}</td>
                <td>{{ $jugador->nacionalidadJugador }}</td>
                <td>{{ $jugador->posicionJugador }}</td>
                <td>{{ $jugador->numeroCamisetaJugador }}</td>
                <td>{{ $jugador->fechaContratacionJugador }}</td>
                <td>{{ $jugador->salarioJugador }}</td>
                <td>{{ $jugador->equipo->nombre_equipo }}</td>
                
                <td>
                    <a href="{{ route('Jugadores.edit', $jugador->id) }}" class="btn btn-outline-info"> 🔧 Editar</a>
                    <form action="{{ route('Jugadores.destroy', $jugador->id) }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger"> 🗑️ Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        <a href="{{ route('welcome') }}" class="btn btn-outline-secondary ">⬅️ Regresar</a>
    </div>
    
</div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>