@extends('layouts.app')
@section('contenido')
@include('pedidos.bebidas.modal')   
<div class="mt-3 row-cols-1 card-columns ">
    @foreach($bebidas as $bebida)
    @include('pedidos.bebidas.modal-delete')
    <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                        <div class="col-md-4">
                         <img src="{{asset('imagenes/'.$bebida->image)}}" alt="{{$bebida->image}}" class="card-img-top">
                        </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$bebida->titulo}}</h5>
                            <p class="card-text">{{$bebida->texto}}</p>
                            <p class="card-text"><small class="text-muted">Fecha:{{ $bebida->created_at}}</small></p>
                            <h5 class="card-title">COCINERO:{{$bebida->user_id}}</h5>
                            <h5 class="card-text">PRECIO:S/{{$bebida->precio}}</h5>
                          </div>
                        </div>
                   </div>
                   <div class="card-footer bg-transparent border-success">
                    <a href="{{URL::action('BebidasController@edit',$bebida->id)}}">
                        <button type="button" class="btn btn-info btn-sm ">
                        <i class="far fa-edit"></i>
                        </button> 
                    </a>

                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar-{{$bebida->id}}">
                       <i class="far fa-trash-alt"></i>
                    </button>   
                    </div>
            </div>
    @endforeach  
</div>
@endsection
