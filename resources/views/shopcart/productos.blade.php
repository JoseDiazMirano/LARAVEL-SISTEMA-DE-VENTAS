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
           <div class="row" style="height: 500px; background-color:#ed1c24;width: 1709px;">
               <div class="col-12 align-self-center text-center">
                    <div id="carousel1" class="carousel slide carousel-fade" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1" data-slide-to="1"></li>
                <li data-target="#carousel1" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{asset('img/Tienda.jpg')}}"   alt=" " width="997" height="469">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('../img/Tienda1.png')}}"   alt=" "  width="997" height="469">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('../img/Tienda2.jpg')}}"  alt=" "  width="997" height="469">
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
<!--Fin de carrusel-->
<!--Productos-->    
<nav>
  <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
    <i class="fas fa-tshirt"></i> PRODUCTOS DEL DIA</a>
    <a class="nav-item nav-link"   href="{{ route('shopcart.cart')}}" >
         <i class="fas fa-shopping-cart"></i> CARRITO DE COMPRA</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <section class="container-flud" id="buffet">
            <div class="row justify-content-center mb-5">
                    <div class="col-12 text-center mt-5"> 
                       <h2>PLATOS DEL DIA</h2>  
                       <hr>
                    </div>
                @foreach($pedidos as $pedido) 
                <div class="contenedor col-4 text-center mt-4">
                  <figure>
                    <img src="{{asset('imagenes/'.$pedido->image)}}" alt="{{$pedido->image}}" class="card-img-top">
                      <div class="capa">
                      <h3>{{$pedido->titulo}}</h3>
                      <p>{{$pedido->texto}}</p>
                     <center><h4 style="color: white;">Precio S/ {{$pedido->precio}}</h4></center><br>
                      <!--BOTON DE CARRITO DE COMPRAS-->
                      <a href="{{ url('add-to-cart',$pedido->id)}}" class=" mr-1  btn btn-outline-danger" role="button" aria-pressed="true"><i class="fas fa-shopping-cart"></i> Añadair</a>
                        <!--<a type="button" href="{{ url('shopcart.cart',$pedido->id)}}" class=" mr-1  btn btn-outline-danger"><i class="fas fa-shopping-cart"></i> Añadair</a>-->
                      </div>
                 </figure>
                </div>  
                @endforeach    
        </section> 
   </div>
<!--BAJA
       <footer class="container-flud">
          <div class="row justify-content-center pt-5">
              <div class="col-4 text-center pb-4">
                <p>PREGUNTAS FRECUENTES?</p>
                  <h4>HOLA</h4>
              </div>
           <div class="col-4 text-center pb-4">
                <p>SIGUENOS EN...</p>
                    <div class="recent-tweet">
                        <div class="social">    
                        <ul>    
                         <li><a href="https://www.youtube.com/channel/UCuRgEjJgi9iZFCYVSASpXDw?view_as=subscriber"><span class="alo-icon"> </span></a></li>
                          <li><a href="https://www.facebook.com/Revolucion-Kulinaria-622104924931663/"> <span class="fb-icon"> </span></a></li>    
                           <li><a href="https://www.facebook.com/Revolucion-Kulinaria-622104924931663/">  <span class="t-icon"> </span></li>
                           <li><a href="https://www.linkedin.com/in/jose-luis-diaz-mirano-82032316b/"><span class="in-icon"> </span></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>   
                </div>
              </div>
              <div class="col-4 text-center pb-4">
                 <p>LIBRO DE RECLAMACIONES</p>
                   <img src="{{asset('img/libro-de-reclamaciones.png')}}" style="width:150px; height:100px;">
              </div>
          </div>
            <div class="copy-right col-12 pt-3 text-center" style="background-color:#0e0303">
                 <p>&copy; 2020  TODOS LOS DERECHOS RESERVADOS | &nbsp;<a href="https://www.linkedin.com/in/jose-luis-diaz-mirano-82032316b/">GRUPO 1</a></p>
        </div> 
      </footer>  -->    
@endsection
