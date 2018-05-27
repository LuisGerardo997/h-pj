<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use MP;

class PaymentController extends Controller
{
  public function paymentProcess{
    $mp = new MP (env('MP_CLIENT_ID'), env('MP_CLIENT_SECRET'));

    $user = auth()->user();
    $prefix = 'VSHOPREF-';
    $external_reference = $prefix . $request->ctoken;
    $token = $request->ctoken;

    $preferenceData = [
        'external_reference' => $external_reference,
        'payer'              => [
            'name' => $user->name,
            'email' => $user->email
        ],
        'back_urls' => [
        'success' => env('APP_URL').'/gracias',
        'pending' => env('APP_URL').'/gracias',
        'failure' => env('APP_URL').'/error'
        ],
        'notification_url' => env('MP_NOTIFICATION_URL'),
        'auto_return' => 'all'
    ];

    $entries = Cart::where('session_id', '=', $token)->get();
    foreach ($entries as $e):
        $preferenceData['items'][] = [
            'title'       => $e->product_name,
            'category_id' => 'zapato',
            'quantity'    => $e->qty,
            'currency_id' => 'VEF',
            'unit_price'  => $e->price,
        ];
    endforeach;

    //dd($preferenceData);
    $preference = $mp->create_preference($preferenceData);
    dd($preference);

    //return init point to be redirected
    //return $preference['response']['init_point'];
  }
}
