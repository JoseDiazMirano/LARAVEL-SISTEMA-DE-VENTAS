@extends('layouts.app')
@section('contenidousu')

<div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="card-box bg-blue">
                    <div class="inner">
                        <p>MI PERFIL</p>
                        <!-- <h3>{{ $roleusers_count ?? '0' }}</h3>-->
                        <!--<p>COCINEROS</p>-->
                    </div>
                    <div class="icon">
                       <i class="fa fa-users"></i>
                    </div>
                    <a href="{{url('shopcart/edit/show')}}" class="card-box-footer">VISTA<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
            
                <div class="card-box bg-green">
                    <div class="inner">
                        <p>EDITAR PERFIL</p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-user-edit"></i>
                    </div>
                    
                    <a href="{{url('shopcart/editusu')}}" class="card-box-footer">VISTA<i class="fa fa-arrow-circle-right"></i></a>
                
                </div>
            
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="card-box bg-orange">
                    <div class="inner">
                        <p>RECLAMOS</p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-heart-broken"></i>
                    </div>
                    <a href="{{url('pedidos/admin/generalen')}}" class="card-box-footer">VISTA<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="card-box bg-red">
                    <div class="inner">
                    <?php $bebidas_count = DB::table('bebidas')->count(); ?>
                        <h3>{{ $bebidas_count ?? '0' }}</h3>
                        <p>MI COMPRAS</p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-shopping-basket"></i>
                    </div>
                    <a href="{{url('pedidos/admin/generalen')}}" class="card-box-footer">VISTA<i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
  <div>  
</div>


@endsection
 