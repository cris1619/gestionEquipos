<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    
    <title>Equipos</title>
    
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