<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ticket de Consumo</title>
    <link href="{{ asset('css/pdf.css') }}" rel="stylesheet">
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="{{asset('img/centerL.png')}}">
      </div>
      <h1>PROYECTO DE JLDM</h1>
      <div id="project">
        <div><span>ASUNTO</span> Comprobante de Pago</div>
        <div><span>CLIENTE</span> {{ Auth::user()->name}}</div>
        <div><span>EMAIL</span> <a href="#">{{ Auth::user()->email}}</a></div>
        <div><span>FECHA</span>{{ date('Y-m-d H:i:s') }}</div> 
        <!--<div><span>DUE DATE</span> September 17, 2015</div>-->
      </div>
    </header>

@if(session('cart'))

<div class="container-fluid">
  <div class="row main-content bg-success text-center">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Producto</th>
        <th>Precio Unitario</th>
        <th>Cantidad</th>
        <th>Precio Total</th>
      </tr>
      </thead>
      <tbody>
    @foreach(session('cart') as $id => $details)
   
      <tr>
        <th> {{$details['titulo']}} </th>
        <td> s./{{$details['precio']}} </td>
        <td>{{$details['quantity']}} </td>
        <td> s/ {{$details['precio'] * $details['quantity']}} </td>
      </tr>
    @endforeach
    <tbody>
  </table>
  </div>
  </div>
  @endif  
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">Cualquier tipo de reclamos comuníquese al numero de whatsapp.<br>
                            Horario de atencion: 7:00 AM - 8:00 PM</div>
      </div>
    </main>
    <footer>
         Copyright © JLDM(2020) 
    </footer>
  </body>
</html>