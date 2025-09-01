@extends('layouts.app')

@section('title')
    Editar Registro de Equipos
@endsection

@section('content')

    <div class="container mt-5">


    <div class="card">
        <div class="card-header">

             <h1>⚽ <b>Editar Registro de Equipos</b></h1>

        <div>
            <form action="{{ route('equipos.update', $equipo->id) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nombre_equipo" class="form-label">Nombre del Equipo</label>
                    <input type="text" class="form-control" id="nombre_equipo" name="nombre_equipo" value="{{ $equipo->nombre_equipo }}">
                </div>
                <div class="mb-3">
                    <label for="ciudad_equipo" class="form-label">Ciudad del Equipo</label>
                    <input type="text" class="form-control" id="ciudad_equipo" name="ciudad_equipo" value="{{ $equipo->ciudad_equipo }}">
                </div>
                <div class="mb-3">
                    <label for="pais_equipo" class="form-label">País del Equipo</label>
                    <input type="text" class="form-control" id="pais_equipo" name="pais_equipo" value="{{ $equipo->pais_equipo }}">
                </div>
                <div class="mb-3">
                    <label for="fecha_fundacion_equipo" class="form-label">Fecha Fundación del Equipo</label>
                    <input type="date" class="form-control" id="fecha_fundacion_equipo" name="fecha_fundacion_equipo" value="{{ $equipo->fecha_fundacion_equipo }}">
                </div>
                <div class="mb-3">
                    <label for="liga_equipo" class="form-label">Liga del Equipo</label>
                    <input type="text" class="form-control" id="liga_equipo" name="liga_equipo" value="{{ $equipo->liga_equipo }}">
                </div>
                <div class="mb-3">
                    <a href="{{ route('equipos.index') }}" class="btn btn-outline-secondary ">⬅️ Regresar</a>
                    <button type="submit" class="btn btn-outline-success">📥 Guardar</button>
                </div>
            </form>
        </div>
    </div>
@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: '!EXITO!',
                text: "{{ session('success') }}",
                confirmButtonText: 'Aceptar',
                timer: 3000
            });
        });
    </script>
@endif
@endsection