@extends('layouts.app')

@section('title')
    Registro de Equipos
@endsection

@section('content')

    <div class="container mt-5">


    <div class="card">
        <div class="card-header">

             <h1><b>Registro de Equipos ⚽ </b></h1> 
        </div>

        <div class="card-body">
        <div>
            <form action="{{ route('equipos.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nombre_equipo" class="form-label">Nombre del Equipo</label>
                    <input type="text" class="form-control @error('nombre_equipo')
                    is-invalid
                    @enderror" id="nombre_equipo" name="nombre_equipo" > 
                    @error('nombre_equipo')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="ciudad_equipo" class="form-label">Ciudad del Equipo</label>
                    <input type="text" class="form-control @error('ciudad_equipo')
                    is-invalid
                    @enderror" id="ciudad_equipo" name="ciudad_equipo">
                    @error('ciudad_equipo')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="pais_equipo" class="form-label">País del Equipo</label>
                    <input type="text" class="form-control @error('pais_equipo')
                    is-invalid
                    @enderror" id="pais_equipo" name="pais_equipo">
                    @error('pais_equipo')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="fecha_fundacion_equipo" class="form-label">Fecha Fundación del Equipo</label>
                    <input type="date" class="form-control @error('fecha_fundacion_equipo')
                    is-invalid
                    @enderror" id="fecha_fundacion_equipo" name="fecha_fundacion_equipo" >
                    @error('fecha_fundacion_equipo')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="liga_equipo" class="form-label">Liga del Equipo</label>
                    <input type="text" class="form-control @error('liga_equipo')
                    is-invalid
                    @enderror" id="liga_equipo" name="liga_equipo" >
                    @error('liga_equipo')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <a href="{{ route('equipos.index') }}" class="btn btn-outline-secondary ">⬅️ Regresar</a>
                    <button type="submit" class="btn btn-outline-success">📥 Guardar</button>
                </div>
            </form>
        </div>
    </div>

@endsection