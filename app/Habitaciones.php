<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Habitaciones extends Model
{
    protected $table = 'habitacion';
    protected $fillable = ['cod_habitacion', 'cod_tipo_habitacion', 'piso', 'cod_estado_habitacion', 'estado'];
}
