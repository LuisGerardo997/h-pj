<?php

Route::get('/', 'Home@index');
Route::get('reservaciones', 'Reservation@index');
Route::get('reservaciones/{type}', 'Room@show');
// Route::get('reservaciones/checkout/preferences/{id}', '')
// Route::post('reservaciones/checkout/preferences', '')
// Route::put('reservaciones/checkout/preferences/{id}', '')
