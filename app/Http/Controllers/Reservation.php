<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habitaciones;
use App\TiposHabitacion;

class Reservation extends Controller
{
    public function index(){
      $rooms = TiposHabitacion::all();
      return view('reservation.reservation', compact('rooms'));
    }

}
