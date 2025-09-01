@extends('layouts.app')

@section('title')
    Equipos
@endsection

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12 text-center">

            <h1>⚽ <b>Equipos</b></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-end">
            <a href="{{ route('equipos.create') }}" class="btn btn-outline-success">➕ Añadir Equipo</a>
        </div>
    </div>


    <div>
        <table class="table table-striped" >
            <tr class="table-secondary">
                <th>ID</th>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>País</th>
                <th>Fecha Fundación</th>
                <th>Liga</th>
                <th>Acciones</th>

            </tr>
            @foreach ($equipos as $equipo)
            <tr class="table-light">
                <td>{{ $equipo->id }}</td>
                <td>{{ $equipo->nombre_equipo }}</td>
                <td>{{ $equipo->ciudad_equipo }}</td>
                <td>{{ $equipo->pais_equipo }}</td>
                <td>{{ $equipo->fecha_fundacion_equipo }}</td>
                <td>{{ $equipo->liga_equipo }}</td>
                <td>
                    <a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-outline-info"> 🔧 Editar</a>
                    <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger" onclick="confirmarEliminacion(event)"> 🗑️ Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        <a href="{{ route('welcome') }}" class="btn btn-outline-secondary ">⬅️ Regresar</a>
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

<script>
        function confirmarEliminacion(event) {
            event.preventDefault();
            const form = event.target.closest('form');

            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        }
</script>

@endsection