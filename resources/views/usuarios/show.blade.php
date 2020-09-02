@extends('layouts.app')

@section('contenido')
<div class="row">
  <!-- Content Column -->
    <div class="col-lg-6 mb-4 text-center">
  <!-- Project Card Example -->
     <div class="card shadow mb-6">
            <div class="card-header ">
                <h6 class="m-0 font-weight-bold text-primary">CARNET DE IDENTIFICACION</h6>
            </div>
            <!-- DATOS DEL USUARIO --> 
           <div class="mx-auto" style="width: 550px;">       
              <div class="card-body">
                  <div class="card mb-6" >
                    <div class="row no-gutters">
                     <div class="col-md-4">
                  <img class="card-img" src="{{asset('imagenes/'.$user->imagen)}}" alt="{{$user->imagen}}" height="400px" width="700px">
              </div>
            <!-- DATOS DEL USUARIO -->     
             <div class="col-md-8 text-center">
                <div class="card-body">
                    <div class="badge badge-primary text-wrap " style="high: 12rem,width: 10rem;">
                      TRABAJADOR DE REVOLUCION KULINARIA
                    </div>
                  <h1 class="card-text ">{{$user->name}}</h1>
                  <h3 class="card-text">{{ $user->email}}</h3>
                  <img src="{{asset('img/trabaja_RK.png')}}" class="" height="150px" width="150px" alt="CODIGO QR">
                  <p class="card-text"><small class="text-muted">FECHA DE INGRESO:</small></p>
                  <p class="card-text"><small class="text-muted">{{ $user->created_at}}</small></p> 
                 </div>
                 </div>
                </div>
              </div>     
      </div>
    </div>
  </div>
</div> 
<div class="col-lg-5 mb-3 text-center">
  <!-- Illustrations -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">MENSAJE</h6>
    </div>
    <div class="card-body">
   
    <p class="card-text">Todo trabajador debe contar con su propio carnet al ingresar al restaurante.</p>
    <a href="{{route('imprimirCarnet')}}" class="btn btn-primary">IMPRIMIR CARNET</a>
     </div>
    </div>
    </div>
  </div>
@endsection

