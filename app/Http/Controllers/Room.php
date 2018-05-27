<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habitaciones;
use Illuminate\Support\Facades\DB;

class Room extends Controller
{
    public function show (Request $request, $type){
      if ($request -> ajax())
      {
        $habitaciones = DB::table('habitacion')
        ->join('tipo_habitacion', 'habitacion.cod_tipo_habitacion', '=', 'tipo_habitacion.cod_tipo_habitacion')
        ->select('habitacion.*', 'tipo_habitacion.precio_tipo_habitacion')
        ->where('tipo_habitacion.cod_tipo_habitacion', $type)->get();
        return response()->json($habitaciones);
      }
    }
}
