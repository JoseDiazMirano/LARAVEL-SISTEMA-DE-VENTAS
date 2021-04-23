<!-- ADMIN-->
@extends('layouts.app')

@section('contenido')
<div>
  <div class="card">
        <div class="card-body">
         @if (session('status'))
            <div class="alert alert-success" role="alert">
               {{ session('status') }}
            </div>
              @endif
           </div>
           <div class="row">

        <!-- Earnings (DIA) Card Example -->
        <div class="col-xl-3 col-md-3 mb-3 mx-auto" style="width: 200px;">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    <p id="diaSemana"></p>
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <h5 id="dia" class="card-title"></h5>
                    <h5  class="card-title">-</h5>
                    <h5 id="anio" class="card-title"></h5>
                  </div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <!-- Earnings (HORA) Card Example -->
            <div class="col-xl-3 col-md-3 mb-3 mx-auto" style="width: 200px;">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-3">HORA</div>
                
                    <div class="h5 mb-0 font-weight-bold text-gray-800"> 
                    <h5 class="card-title" id="horas"></h5>
                    <h5 class="card-title"> : </h5>
                    <h5 id="minutos" class="card-title"></h5>
                    <h5 class="card-title"> : </h5>
                    <h5 id="segundos" class="card-title"></h5>
                    <h5 class="card-title">-</h5>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <b><h5 id="ampm" class="card-title"></h5></b>
                    </div>
                    </div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-clock fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
            </div>
     </div>
   </div>

   <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="card-box bg-blue">
                    <div class="inner">
                    <?php $users_count = DB::table('users')->count(); ?>
                    <!--<?php $roleusers_count = DB::table('role_user')->count(); ?>-->
                        <h3>{{ $users_count ?? '0' }}</h3>
                        <p>USUARIOS REGISTRADOS</p>
                        <!-- <h3>{{ $roleusers_count ?? '0' }}</h3>-->
                        <!--<p>COCINEROS</p>-->
                    </div>
                    <div class="icon">
                       <i class="fa fa-users"></i>
                    </div>
                    <a href="{{url('pedidos/admin/generalen')}}" class="card-box-footer">VISTA<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="card-box bg-green">
                    <div class="inner">
                    <?php $pedidos_count = DB::table('pedidos')->count(); ?>
                        <h3>{{ $pedidos_count ?? '0' }} </h3>
                        <p>PRODUCTOS REGISTRADOS</p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-tshirt"></i>
                    </div>
                    <a href="{{url('pedidos/admin/generalen')}}" class="card-box-footer">VISTA<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="card-box bg-orange">
                    <div class="inner">
                        <h3>Contador</h3>
                        <p>otros...</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-pizza-slice" aria-hidden="true"></i>
                    </div>
                    <a href="{{url('pedidos/admin/generalen')}}" class="card-box-footer">VISTA<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="card-box bg-red">
                    <div class="inner">  
                        <h3>Contador</h3>
                        <p>otros....</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-cocktail"></i>
                    </div>
                    <a href="{{url('pedidos/admin/generalen')}}" class="card-box-footer">VISTA<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
  <div>  
</div>

<!-- COCINERO-->
@endsection
@section('contenidoch')
<div>
  <div class="card">
        <div class="card-header">Dashboard</div>
        <div class="card-body">
         @if (session('status'))
            <div class="alert alert-success" role="alert">
               {{ session('status') }}
            </div>
              @endif
           </div>
           <div class="row">

        <!-- Earnings (DIA) Card Example -->
        <div class="col-xl-3 col-md-3 mb-3 mx-auto" style="width: 200px;">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    <p id="diaSemana"></p>
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <h5 id="dia" class="card-title"></h5>
                    <h5  class="card-title">-</h5>
                    <h5 id="anio" class="card-title"></h5>
                  </div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <!-- Earnings (HORA) Card Example -->
            <div class="col-xl-3 col-md-3 mb-3 mx-auto" style="width: 200px;">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-3">HORA</div>
                
                    <div class="h5 mb-0 font-weight-bold text-gray-800"> 
                    <h5 class="card-title" id="horas"></h5>
                    <h5 class="card-title"> : </h5>
                    <h5 id="minutos" class="card-title"></h5>
                    <h5 class="card-title"> : </h5>
                    <h5 id="segundos" class="card-title"></h5>
                    <h5 class="card-title">-</h5>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <b><h5 id="ampm" class="card-title"></h5></b>
                    </div>
                    </div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-clock fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
     </div>
</div>
<div class="container-fluid">

<!-- Page Heading -->

<div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4">
    <div class="card">
      <img src="{{asset('img/lvtmanos.png')}}" class="card-img-top"  width="1000" height="600">
      <div class="card-body">
        <h5 class="card-title">Antes de entrar a cualquier lugar lávate las manos </h5>
        <p class="card-text">El lavado de manos con jabón es una de las maneras más efectivas y sencillas de prevenir enfermedades diarreicas y respiratorias.
                    Para que el lavado sea realmente efectivo, siempre debés utilizar jabón. Si los usás adecuadamente, todos los jabones son igualmente efectivos 
                    para remover los gérmenes que causan enfermedades.
                    Si no contás con jabón, podés reemplazarlo eventualmente con alcohol en gel.</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
    <img src="{{asset('img/mnsj.png')}}"  class="card-img-top" width="1000" height="600">
      <div class="card-body">
        <h5 class="card-text">Tengo un mensaje para ti:</h5>
        <p class="card-text">Cualquier persona que deja de aprender es viejo, ya sea a los veinte u ochenta. 
            Cualquier persona que sigue aprendiendo se mantiene joven. La cosa más grande en la vida es mantener la mente joven.</p></b>
            <b><i>"Cuanto más tiempo pase sin que actúes, más dinero estás dejando de ganar."</i>
        <i>Carrie Wilkerson</i>   
      </div>
    </div>
  </div>
</div>
@endsection

@section('contenidousu')
<div>
  <div class="card">
        <div class="card-header">Dashboard</div>
        <div class="card-body">
         @if (session('status'))
            <div class="alert alert-success" role="alert">
               {{ session('status') }}
            </div>
              @endif
           </div>
           <div class="row">

        <!-- Earnings (DIA) Card Example -->
        <div class="col-xl-3 col-md-3 mb-3 mx-auto" style="width: 200px;">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                    <p id="diaSemana"></p>
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <h5 id="dia" class="card-title"></h5>
                    <h5  class="card-title">-</h5>
                    <h5 id="anio" class="card-title"></h5>
                  </div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <!-- Earnings (HORA) Card Example -->
            <div class="col-xl-3 col-md-3 mb-3 mx-auto" style="width: 200px;">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-3">HORA</div>
                
                    <div class="h5 mb-0 font-weight-bold text-gray-800"> 
                    <h5 class="card-title" id="horas"></h5>
                    <h5 class="card-title"> : </h5>
                    <h5 id="minutos" class="card-title"></h5>
                    <h5 class="card-title"> : </h5>
                    <h5 id="segundos" class="card-title"></h5>
                    <h5 class="card-title">-</h5>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <b><h5 id="ampm" class="card-title"></h5></b>
                    </div>
                    </div>
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-clock fa-2x text-gray-300"></i>
                    </div>
                </div>
                </div>
            </div>
     </div>
</div>
<div class="container-fluid">

<!-- Page Heading -->

<div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4">
    <div class="card">
      <img src="{{asset('img/lvtmanos.png')}}" class="card-img-top"  width="1000" height="600">
      <div class="card-body">
        <h5 class="card-title">Antes de entrar a la cocina lávate las manos </h5>
        <p class="card-text">El lavado de manos con jabón es una de las maneras más efectivas y sencillas de prevenir enfermedades diarreicas y respiratorias.
                    Para que el lavado sea realmente efectivo, siempre debés utilizar jabón. Si los usás adecuadamente, todos los jabones son igualmente efectivos 
                    para remover los gérmenes que causan enfermedades.
                    Si no contás con jabón, podés reemplazarlo eventualmente con alcohol en gel.</p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
    <img src="{{asset('img/mnsj.png')}}"  class="card-img-top" width="1000" height="600">
      <div class="card-body">
        <h5 class="card-text">Tengo un mensaje para ti:</h5>
        <p class="card-text">Cualquier persona que deja de aprender es viejo, ya sea a los veinte u ochenta. 
            Cualquier persona que sigue aprendiendo se mantiene joven. La cosa más grande en la vida es mantener la mente joven.</p></b>
            <b><i>"Cuanto más tiempo pase sin que actúes, más dinero estás dejando de ganar."</i>
        <i>Carrie Wilkerson</i>   
      </div>
    </div>
  </div>
</div>
@endsection

