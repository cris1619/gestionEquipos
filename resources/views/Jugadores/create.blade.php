@extends('layouts.app')

@section('title')
    Registro de Jugadores
@endsection

@section('content')

    <div class="container mt-5">


    <div class="card">
        <div class="card-header text-center">
            <h1><b>Registro de Jugadores⚽ </b></h1>
        </div>

        <div class="card-body">
            <form action="{{ route('Jugadores.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="Equipos" class="form-label">Equipo</label>
                    <select name="idEquipo" id="idEquipo" class="form-select">
                        <option value="">Seleccione un equipo</option>
                        @foreach ($equipos as $equipo)
                            <option value="{{ $equipo->id }}">{{ $equipo->nombre_equipo }}</option>
                        @endforeach
                    </select>

                </div>

                <div class="mb-3">
                    <label for="nombreJugador" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombreJugador" name="nombreJugador" placeholder="Ingrese el nombre del jugador" > 
                </div>
                <div class="mb-3">
                    <label for="apellidoJugador" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellidoJugador" name="apellidoJugador" placeholder="Ingrese el apellido del jugador" > 
                </div>
                <div class="mb-3">
                    <label for="fechaNacimientoJugador" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="fechaNacimientoJugador" name="fechaNacimientoJugador" > 
                </div>
                <div class="mb-3">
                    <label for="nacionalidadJugador" class="form-label">Nacionalidad</label>
                    <input type="text" class="form-control" id="nacionalidadJugador" name="nacionalidadJugador" placeholder="Ingrese la nacionalidad del jugador" > 

                </div>
                <div class="mb-3">
                    <label for="posicionJugador" class="form-label">Posición</label>
                    <select class="form-select" id="posicionJugador" name="posicionJugador" >
                        <option value="">Seleccione una posición</option>
                        <option value="Portero">Portero</option>
                        <option value="Defensa">Defensa</option>
                        <option value="Centrocampista">Centrocampista</option>
                        <option value="Delantero">Delantero</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="numeroCamisetaJugador" class="form-label">Número de Camiseta</label>
                    <input type="number" class="form-control" id="numeroCamisetaJugador" name="numeroCamisetaJugador" min="1" max="99" placeholder="Ingrese el número de camiseta del jugador" > 

                </div>
                <div class="mb-3">
                    <label for="fechaContratacionJugador" class="form-label">Fecha de Contratación</label>
                    <input type="date" class="form-control" id="fechaContratacionJugador" name="fechaContratacionJugador" > 

                </div>
                <div class="mb-3">
                    <label for="salarioJugador" class="form-label">Salario</label>
                    <input type="number" class="form-control" id="salarioJugador" name="salarioJugador" placeholder="Ingrese el salario del jugador"> 
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
@endsection