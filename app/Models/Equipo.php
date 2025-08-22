<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';

    protected $fillable = [
        'nombre_equipo',
        'ciudad_equipo',
        'pais_equipo',
        'fecha_fundacion_equipo',
        'liga_equipo'
    ];

    public function jugador()
    {
        return $this->hasMany(jugador::class);
    }

}
