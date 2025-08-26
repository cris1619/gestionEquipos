<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Crear Jugadores</title>
</head>
<body>

<link href="https://fonts.googleapis.com/css2?family=Rationale&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: "Rationale", sans-serif;
        }

    </style>

    <div class="container mt-5">


    <div class="card">
        <div class="card-header text-center">
            <h1><b>Editar Jugadores⚽ </b></h1>
        </div>

        <div class="card-body">
            <form action="{{ route('Jugadores.update', $jugador->id) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="Equipos" class="form-label">Equipo</label>
                    <select name="idEquipo" id="idEquipo" class="form-select">
                        @foreach ($equipos as $equipo)
                            <option value="{{ $equipo->id }}" 
                            {{ $jugador->idEquipo == $equipo->id ? 'selected' : '' }}
                            >{{ $equipo->nombre_equipo }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="nombreJugador" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombreJugador" name="nombreJugador" value="{{ $jugador->nombreJugador }}" > 
                </div>
                <div class="mb-3">
                    <label for="apellidoJugador" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellidoJugador" name="apellidoJugador" value="{{ $jugador->apellidoJugador }}" > 

                </div>
                <div class="mb-3">
                    <label for="fechaNacimientoJugador" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="fechaNacimientoJugador" name="fechaNacimientoJugador" value="{{ $jugador->fechaNacimientoJugador }}" > 
                </div>
                <div class="mb-3">
                    <label for="nacionalidadJugador" class="form-label">Nacionalidad</label>
                    <input type="text" class="form-control" id="nacionalidadJugador" name="nacionalidadJugador" value="{{ $jugador->nacionalidadJugador }}" > 

                </div>
                <div class="mb-3">
                    <label for="posicionJugador" class="form-label">Posición</label>
                    <select class="form-select" id="posicionJugador" name="posicionJugador" value="{{ $jugador->posicionJugador }}" >
                        <option value="">Seleccione una posición</option>
                        <option value="Portero" {{ $jugador->posicionJugador == 'Portero' ? 'selected' : '' }}>Portero</option>
                        <option value="Defensa" {{ $jugador->posicionJugador == 'Defensa' ? 'selected' : '' }}>Defensa</option>
                        <option value="Centrocampista" {{ $jugador->posicionJugador == 'Centrocampista' ? 'selected' : '' }}>Centrocampista</option>
                        <option value="Delantero" {{ $jugador->posicionJugador == 'Delantero' ? 'selected' : '' }}>Delantero</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="numeroCamisetaJugador" class="form-label">Número de Camiseta</label>
                    <input type="number" class="form-control" id="numeroCamisetaJugador" name="numeroCamisetaJugador" min="1" max="99" value="{{ $jugador->numeroCamisetaJugador }}" > 

                </div>
                <div class="mb-3">
                    <label for="fechaContratacionJugador" class="form-label">Fecha de Contratación</label>
                    <input type="date" class="form-control" id="fechaContratacionJugador" name="fechaContratacionJugador" value="{{ $jugador->fechaContratacionJugador }}" > 

                </div>
                <div class="mb-3">
                    <label for="salarioJugador" class="form-label">Salario</label>
                    <input type="number" class="form-control" id="salarioJugador" name="salarioJugador" value="{{ $jugador->salarioJugador }}" > 
                </div>

                <div class="mb-3">
                    
                </div>
                
                <div class="mb-3">
                    <a href="{{ route('Jugadores.index') }}" class="btn btn-outline-secondary ">⬅️ Regresar</a>
                    <button type="submit" class="btn btn-outline-primary">📥 Registrar</button>
                </div>
                
            </form>
        </div>
    </div>                   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>