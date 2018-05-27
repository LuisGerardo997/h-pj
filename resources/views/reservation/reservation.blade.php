@extends('layouts.header')
@section('custom-styles')
<link rel="stylesheet" href="{{URL::asset('assets/css/style-b.css')}}">
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/reservation.css')}}" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/payment_form.css')}}" />
@endsection
@section('nav-items')
<ul class="nav navbar-nav menu__list">
  <li class="menu__item"><a href="{{url('/')}}" class="menu__link">Inicio</a></li>
  <li class="menu__item"><a href="#about" class="menu__link scroll">Servicios</a></li>
  <li class="menu__item"><a href="#rooms" class="menu__link scroll">Habitaciones</a></li>
  <li class="menu__item menu__item--current"><a href="{{url('/reservaciones')}}" class="menu__link">Reservaciones</a></li>
  <!-- <li class="menu__item"><a href="#rooms" class="menu__link scroll">Portafolio</a></li> -->
  <li class="menu__item"><a href="#contact" class="menu__link scroll">Contáctanos</a></li>
</ul>
@endsection
@section('content')
<section class="section-reservation-page bg-white">
  <div class="container">
    <div class="reservation-page">
      <!-- STEP -->
      <div class="reservation_step">
        <ul>
          <li class="steps-tab active"><a href="#" data-toggle="#rooms_step"><span>1.</span>  Tipo de habitación</a></li>
          <li class="steps-tab"><a href="#" data-toggle="#pay_step" class="disabled"><span>2.</span> Pago</a></li>
          <li class="steps-tab"><a href="#" data-toggle="#finish_step" class="disabled"><span>3.</span> Reservación realizada</a></li>
        </ul>
      </div>
      <!-- END / STEP -->
      <div id="details-content" class="col-md-4 col-lg-3">
        <div class="reservation-sidebar">
          <!-- SIDEBAR AVAILBBILITY -->
          <div class="panel panel-details">
            <div class="panel-header">
              <div class="reservation-sidebar_availability bg-gray">
                <!-- HEADING -->
                <h2 class="reservation-heading">Tu reservación</h2>
                <!-- END / HEADING -->
                <form action="{{url('/')}}" name="reservation_form" method="get">
                  <h6 class="check_availability_title">Tus fechas</h6>
                  <div class="form-group">
                    <label for="daterange"></label>
                    <input class="form-control" type="text" name="daterange">
                  </div>
                  <h6 class="check_availability_title">Habitaciones &amp; Huéspedes</h6>
                  <br>
                  <div class="reservation_details">
                    <p class="text-center">No ha seleccionado ninguna habitación.</p>
                  </div>
                  <input type="hidden" name="adults_by" class="form-control">
                  <input type="hidden" name="children_by_room" class="form-control">
                  <input type="hidden" name="rooms" class="form-control">
                  <div class="footer" name="div_btn_reservar" style="display:none">
                    <button class="awe-btn awe-btn-13" name="btn_reservar">Reservar</button>
                  </div>
                  <div name="div_btn_next">
                    <button class="awe-btn awe-btn-13" name="btn_next">Siguiente</button>
                  </div>
                </form>
                <!-- Paypal FORM -->
                <br>
                <div class="text-center">
                  <form method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/" target="_blank">
                  <input name="merchantId"    type="hidden"  value="508029"   >
                  <input name="accountId"     type="hidden"  value="512323" >
                  <input name="description"   type="hidden"  value="Test PAYU"  >
                  <input name="referenceCode" type="hidden"  value="TestPayU" >
                  <input name="amount"        type="hidden"  value="200"   >
                  <input name="tax"           type="hidden"  value="0"  >
                  <input name="taxReturnBase" type="hidden"  value="0" >
                  <input name="currency"      type="hidden"  value="PEN" >
                  <input name="signature"     type="hidden"  value="31d5c530344475a9229bf0362c1e782c"  >
                  <input name="test"          type="hidden"  value="1" >
                  <input name="buyerEmail"    type="hidden"  value="test@test.com" >
                  <input name="responseUrl"    type="hidden"  value="http://localhost:8000/reservaciones/" >
                  <input name="confirmationUrl"    type="hidden"  value="http://localhost:8000/reservaciones/" >
                  <input name="Submit"        type="submit"  value="Enviar" >
                </form>
                </div>
                <!-- END Paypal FORM -->
              </div>
            </div>
          </div>
          <!-- END / SIDEBAR AVAILBBILITY -->
        </div>
      </div>
      <div class="col-md-8 text-center">
        <div class="row">
          <div class="tab-panel">
            <div class="plans-section active" id="rooms_step">
              <div class="priceing-table-main">
                @foreach($rooms as $room)
                <div class="col-md-4 room_type" value="{{$room->cod_tipo_habitacion}}" data-type="{{$room->tipo_habitacion}}" capacity="{{$room->max_h}}" href="javascript;" style="margin-bottom:30px;">
                  <div class="price-block agile">
                    <div class="price-gd-top">
                      <img src="{{URL::asset('assets/images/r1.jpg')}}" alt=" " class="img-responsive" />
                      <a href="#more">
                        <h4>{{$room->tipo_habitacion}}</h4>
                      </a>
                    </div>
                    <div class="price-gd-bottom">
                      <div class="clearfix">
                        <div class="price col-lg-6">
                          <span><strong>Precio: </strong> <p>s/.{{$room->precio_tipo_habitacion}}</p></span>
                        </div>
                        <div class="capacity col-lg-6">
                          <span><strong>Capacidad: </strong> <p>{{$room->max_h}} personas</p></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            <div class="plans-section" id="pay_step">
              <!-- <div class="priceing-table-main">
                <div class="panel panel-secondary">
                  <div class="container"> -->
                    <!-- <div class="row"> -->
                      <!-- You can make it whatever width you want. I'm making it full width
                      on <= small devices and 4/12 page width on >= medium devices -->
                    <!-- </div> -->
                  <!-- </div> -->

                  <!-- If you're using Stripe for payments -->
                  <!-- <script type="text/javascript" src="https://js.stripe.com/v2/"></script> -->
                <!-- </body>
              </div>
            </div> -->
            <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                <div class="row clearfix">
                  <div class="panel panel-default">
                    <div class="panel-header">
                      <br>
                      <h3>
                        Detalle del cliente
                      </h3>
                    </div>
                    <div class="panel-body text-left">
                      <form action="" name="client_details">
                        <div class="form-group col-md-6 col-lg-6">
                          <label for="client_dni" class="form-label">DNI:</label>
                          <input name="client_dni" type="number" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-lg-6">
                          <label for="client_name" class="form-label">Nombres:</label>
                          <input name="client_name" type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-lg-6">
                          <label for="client_ap" class="form-label">Apellido paterno:</label>
                          <input name="client_ap" type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-lg-6">
                          <label for="client_am" class="form-label">Apellido materno:</label>
                          <input name="client_am" type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-8 col-lg-8">
                          <label for="client_email" class="form-label">Correo electrónico:</label>
                          <input name="client_email" type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4 col-lg-4">
                          <label for="client_phone" class="form-label">Teléfono:</label>
                          <input name="client_phone" type="text" class="form-control">
                        </div>
                          <br>
                      </form>
                    </div>
                  </div>
                  <!-- <h1>Hola</h1> -->
                </div>
            </div>
          </div>
          <div class="plans-section" id="finish_step">
            <div class="priceing-table-main">
              <div class="panel panel-secondary">
                <p>jbndkasbdia</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<div class="modal fade" id="room_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Seleccione su(s) habitación(es)</h4>
      </div>
      <div class="modal-body room-list">
      </div>
      <br><br>
      <br><br>
      <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="{{URL::asset('assets/js/reservation.js')}}" charset="utf-8"></script>
<!-- <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script> -->
<!-- <script src="{{URL::asset('assets/js/payments.js')}}" charset="utf-8"></script> -->
<!-- <script src="{{URL::asset('assets/js/payment_form.js')}}" charset="utf-8"></script> -->
@endsection
