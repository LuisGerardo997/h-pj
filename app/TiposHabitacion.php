<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TiposHabitacion extends Model
{
    protected $table = 'tipo_habitacion';
    protected $fillable = ['cod_tipo_habitacion', 'tipo_habitacion', 'descripcion', 'precio_tipo_habitacion', 'max_h', 'estado'];
}
