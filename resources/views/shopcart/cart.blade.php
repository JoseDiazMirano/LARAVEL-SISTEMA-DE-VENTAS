@extends('layouts.product')

@section('contenidousu')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4">
         <a class="navbar-brand mr-auto" href="#">Revolución Kulinaria</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
         </button>

          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('../')}}">INICIO<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('../home')}}">MI CUENTA<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
               <a class="nav-link"> BIENVENIDO: {{ Auth::user()->name}}</a>
              </li>
            </ul>
          </div>
        </nav>


        <header class="container-fluid">
           <div class="row" style="height: 500px; background-color:#ed1c24;">
               <div class="col-12 align-self-center text-center">
                    <div id="carousel1" class="carousel slide carousel-fade" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1" data-slide-to="1"></li>
                <li data-target="#carousel1" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="../img/Tienda.jpg"  alt=" " width="997" height="469">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../img/Tienda1.png"  alt=" "  width="997" height="469">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../img/Tienda2.jpg"  alt=" "  width="997" height="469">
                </div>
                        </div>
                    </div>
                        <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                </div>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                    </div>
           </div>
       </header>


<div class="main-content  text-center">        
  <a type="button" href="{{ url('/shopcart/productos')}}" class=" btn-primary btn-lg btn-block">Seguir Comprando</a>
    <!--<a href="{{ url('/shopcart/productos')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Primary link</a>-->
</div>
<?php $valor = 0 ?>
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
        <th>IMG</th>
        <th>Eliminar</th>
      </tr>
      </thead>
      <tbody>

    @foreach(session('cart') as $id => $details)
    <?php $valor += $details['precio'] * $details['quantity'] ?>
    
      <tr>
        <th> {{$details['titulo']}} </th>
        <td> s./{{$details['precio']}} </td>
        <td>{{$details['quantity']}} </td>
        <td> s/ {{$details['precio'] * $details['quantity']}} </td>
        <td> <img src="{{asset('imagenes/'.$details['image'])}}" width="90" height="90"></td>
        @csrf
          @method('DELETE')
        <td><button type="submit"><img src="{{asset('img/delete.png')}}">Eliminar</button></td>
      </tr>
    @endforeach
    <tbody>
  </table>
  </div>
  </div>

  <table class="nav justify-content-center mg-4">
    <th>
      <div class="badge badge-primary text-wrap" style="width:50rem;">
      <p></p>
      <p>Valor S./{{$valor}}</p>
      <p>IGV S./{{$valor*0.18}}</p>
      <p>TOTAL A PAGAR S./{{$valor+$valor*0.18}}</p>
      <a href="{{route('imprimir')}}"><button type="button" class="btn btn-info">COMPRAR</button></a>
      <!--<button type="button" class="btn btn-info">COMPRAR</button>-->
      </div>
    </th>
  </table>
  @endif   
@endsection
