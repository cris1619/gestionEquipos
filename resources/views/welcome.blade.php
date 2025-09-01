@extends('layouts.app')

@section('title')
    Sistema de gestion de Equipos y Jugadores
@endsection

@section('content')

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

@endsection
