<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jugador extends Model
{
    protected $table = 'jugadores';

    protected $fillable = [
        'nombreJugador',
        'apellidoJugador',
        'fechaNacimientoJugador',
        'nacionalidadJugador',
        'posicionJugador',
        'numeroCamisetaJugador',
        'fechaContratacionJugador',
        'salarioJugador',
        'idEquipo'
    ];

    public function Equipo()
    {
        return $this->belongsTo(Equipo::class, 'idEquipo');
    }

}
