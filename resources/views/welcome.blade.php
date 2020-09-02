<!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" type="imagenes" href="{{asset('img/fish.png')}}">
             <!-- Scripts -->
          <script src="{{ asset('js/app.js') }}" defer></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
          <script src="{{asset ('dist/js/adminlte.js')}} "></script>
            <!-- Styles -->
          <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
          <link href="{{ asset('css/app.css') }}" rel="stylesheet">
          <link href="{{ asset('css/style.css') }}" rel="stylesheet">
          <link href="{{ asset('../css/style2.css') }}" rel="stylesheet">
          <link href="{{ asset('../css/style3.css') }}" rel="stylesheet">     
        <title>PROYECTO DE JLDM</title>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4">
         <a class="navbar-brand mr-auto" href="#">PROYECTO DE JLDM</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
         </button>

          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">INICIO<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#menu">TIENDA ONLINE</a>
              </li>
              <!--<li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('PLATO DEL DIA') }}</a>
              </li>-->
              <li class="nav-item">
                <a class="nav-link" href="#ubicanos">UBICANOS</a>
              </li>
               <li class="nav-item">
               <a class="nav-link" href="{{ route('login') }}">{{ __('INICIAR SESION') }}</a>
              </li>
            </ul>
          </div>
        </nav>

       <header class="container-fluid">
           <div class="row" style="height: 500px; background-color:transaparent;">
               <div class="col-12 align-self-center text-center">
                    <div id="carousel1" class="carousel slide carousel-fade" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel1" data-slide-to="1"></li>
                <li data-target="#carousel1" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="img/Tienda.jpg"  alt=" " width="997" height="469">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/Tienda1.png"  alt=" "  width="997" height="469">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/Tienda2.jpg"  alt=" "  width="997" height="469">
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

      
       <section class="container-flud" id="platos">
            <div class="row justify-content-center mb-5">
                    <div class="col-12 text-center mt-5">
                       <h3>STORE JLDM</h3>  
                       <hr>
                       <h3>TEXTO A SU DECISION PARA CAMBIAR</h3> 
                    </div>
          <div class="contenedor col-4 text-center mt-4">
            <figure>
               <img src="{{asset('img/tshirt.png')}}" class="PLATOS" alt="PLATOS DE Revolución Kulinaria">
            <div class="capa">
               <h3>NOMBRE DEL PRODUCTO</h3>
               <p> REALIZAMOS UNA DESCRIPCION DEL PRODUCTO 
               <a href="https://www.linkedin.com/in/jose-luis-diaz-mirano-82032316b/">PIDELO YA</a></p>
           </div>
           </figure>
          </div>
          <div class="contenedor col-4 text-center mt-4">
             <figure>
               <img src="{{asset('img/store.png')}}" class="PLATOS" alt="PLATOS DE Revolución Kulinaria">
               <div class="capa">
               <h3>NOMBRE DEL PRODUCTO</h3>
               <p> REALIZAMOS UNA DESCRIPCION DEL PRODUCTO 
                <a href="https://www.linkedin.com/in/jose-luis-diaz-mirano-82032316b/">pagina web</a></p>
               </div>   
             </figure>
          </div>
          <div class="contenedor col-4 text-center mt-4">
             <figure>
               <img src="{{asset('img/tshirt2.png')}}"  class="PLATOS" alt="PLATOS DE Revolución Kulinaria">
                <div class="capa">
                <h3>NOMBRE DEL PRODUCTO</h3>
               <p> REALIZAMOS UNA DESCRIPCION DEL PRODUCTO 
               <a href="https://www.linkedin.com/in/jose-luis-diaz-mirano-82032316b/">PIDELO YA</a></p>
               </div>
             </figure>
          </div>   
              <a type="button"  href="{{ url('/shopcart/productos')}}" class="btn2 btn-danger btn-lg text-center">PEDIR</a>
        </div> 
        </section>  
        <section class="container-flud" id="menu">
            <div class="row justify-content-center mb-5">
                      <div class="col-12 text-center mt-5">
                      <h3>STORE JLDM</h3>  
                       <hr>
                       <h3>TEXTO A SU DECISION PARA CAMBIAR</h3> 
                      </div>
            <div class="contenedor col-4 text-center mt-4">
              <figure>
                <img src="{{asset('img/tshirt3.png')}}" class="PLATOS" alt="PLATOS DE Revolución Kulinaria">
                  <div class="capa">
                  <h3>NOMBRE DEL PRODUCTO</h3>
               <p> REALIZAMOS UNA DESCRIPCION DEL PRODUCTO 
                  <a href="https://www.linkedin.com/in/jose-luis-diaz-mirano-82032316b/">pagina web</a></p>
                  </div>
              </figure>
            </div>
            <div class="contenedor col-4 text-center mt-4">
              <figure>
                <img src="{{asset('img/centerL.png')}}" class="PLATOS" alt="PLATOS DE Revolución Kulinaria">
                <div class="capa">
                <h3>DALE LIKE</h3>
                <p>SUSCRIBETE A MI CANAL</p>
                </div>
              </figure>
            </div>
            <div class="contenedor col-4 text-center mt-4">
              <figure>
                <img src="{{asset('img/store.png')}}" class="PLATOS" alt="PLATOS DE Revolución Kulinaria">
                <div class="capa">
                <h3>NOMBRE DEL PRODUCTO</h3>
                <p> REALIZAMOS UNA DESCRIPCION DEL PRODUCTO 
                  <a href="https://www.linkedin.com/in/jose-luis-diaz-mirano-82032316b/">PIDELO YA</a></p>
               </div>
              </figure>
            </div>
               <a type="button"  href="{{ url('/shopcart/productos')}}" class="btn2 btn-danger btn-lg text-center">PEDIR</a>
          </div>
        </section> 

       <section class="container-flud" id="carta">
            <div class="row justify-content-center mb-5">
                    <div class="col-12 text-center mt-5">
                       <h3>STORE JLDM</h3>  
                       <hr>
                       <h3>TEXTO A SU DECISION PARA CAMBIAR</h3> 
                    </div>
          <div class="contenedor col-4 text-center mt-4">
            <figure>
               <img src="{{asset('img/jean.png')}}"  class="PLATOS" alt="PLATOS DE Revolución Kulinaria">
               <div class="capa">
                <h3>NOMBRE DEL PRODUCTO</h3>
                <p> REALIZAMOS UNA DESCRIPCION DEL PRODUCTO 
                  <a href="https://www.linkedin.com/in/jose-luis-diaz-mirano-82032316b/">pagina web</a></p>
               </div>
            </figure>
          </div>
          <div class="contenedor col-4 text-center mt-4">
            <figure>
               <img src="{{asset('img/store.png')}}"  class="PLATOS" alt="PLATOS DE Revolución Kulinaria">
               <div class="capa">
                <h3>NOMBRE DEL PRODUCTO</h3>
                <p> REALIZAMOS UNA DESCRIPCION DEL PRODUCTO 
                <a href="https://www.linkedin.com/in/jose-luis-diaz-mirano-82032316b/">pagina web</a></p>
               </div>
            </figure>
          </div>
          <div class="contenedor col-4 text-center mt-4">
            <figure>
               <img src="{{asset('img/jean2.png')}}"  class="PLATOS" alt="PLATOS DE Revolución Kulinaria">
               <div class="capa">
                 <h3>NOMBRE DEL PRODUCTO</h3>
                <p> REALIZAMOS UNA DESCRIPCION DEL PRODUCTO 
                 <a href="https://www.linkedin.com/in/jose-luis-diaz-mirano-82032316b/">pagina web</a></p>
               </div>
            </figure>
          </div>
            <a type="button"  href="{{ url('/shopcart/productos')}}" class="btn2 btn-danger btn-lg text-center">PEDIR</a>
         </div> 
       </section>

      
        <section class="container-fluid" id="ubicanos">
           <div class="row justify-content-center py-5" style="height: 850px; background-color:black;">
            <div class=" row justify-content-center">
                        <div class="col-12 text-center mt-5 mb-4 text-p">
                        <h2>UBICANOS</h2>
                            <hr> 
                        </div>
              <div class="border py-5 col-4 text-center align-self-center text-p" style="text-align: center;">
                  <p>Actualmente el restaurante está ubicado en la avenida<b>...............NOLOSE</b>.
                  </p>
             </div>
              <div class="mapa col-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31404.179879502553!2d-115.81568059611496!3d37.22827054184442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80b81baaba3e8c81%3A0x970427e38e6237ae!2s%C3%81rea%2051%2C%20Nevada%2C%20EE.%20UU.!5e1!3m2!1ses-419!2spe!4v1598925826239!5m2!1ses-419!2spe" 
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
             </div>
            </div> 
         </div>
        </div>
       </section>
       <section class="container">
        <div class="row justify-content-center mb-5">
        <div class="col-12 text-center mt-5 ">
                       <h3>CONTACTANOS</h3>
                       <hr> 
         </div>  
         <div class="col-10">
             <form>
              <div class="form-group">
                <label for="name">INGRESE SU NOMBRE</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">INGRESE SU E-MAIL</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
              </div>
              <div class="form-group">
                <label for="name">INGRESE SU CELULAR</label>
                <input type="text" class="form-control" id="celular"  placeholder="">
              </div>
              <div class="form-group">
                <label for="msg">MENSAJE</label>
                <textarea class="form-control" id="msg" rows="3"></textarea>
              </div>
              <button type="button" class="btn3 btn-primary btn-lg btn-block">ENVIAR</button>
            </form>   
         </div>
        </div>
      </section>   
     <footer class="container-flud">
          <div class="row justify-content-center pt-5">
              <div class="col-4 text-center pb-4 text-p">
                <p>PREGUNTAS FRECUENTES?</p>
                  <h4>HOLA</h4>
              </div>
           <div class="col-4 text-center pb-4 text-p">
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
              <div class="col-4 text-center pb-4 text-p">
                 <p>LIBRO DE RECLAMACIONES</p>
                   <img src="img/libro-de-reclamaciones.png" style="width:150px; height:100px;">
              </div>
          </div>
            <div class="copy-right text-center" style="background-color:#0e0303">
                 <p>&copy; 2020  TODOS LOS DERECHOS RESERVADOS | &nbsp;<a href="https://www.linkedin.com/in/jose-luis-diaz-mirano-82032316b/">GRUPO 1</a></p>
        </div> 
      </footer>         
    </body>
</html>
