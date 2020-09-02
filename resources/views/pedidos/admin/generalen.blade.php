@extends('layouts.app')
@section('contenido')
@include('pedidos.entradas.modal')   
<div class="mt-3 row-cols-1 card-columns ">
    @foreach($entradas as $entrada)
    @include('pedidos.entradas.modal-delete')
    <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                        <div class="col-md-4">
                         <img src="{{asset('imagenes/'.$entrada->image)}}" alt="{{$entrada->image}}" class="card-img-top">
                        </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$entrada->titulo}}</h5>
                            <p class="card-text">{{$entrada->texto}}</p>
                            <p class="card-text"><small class="text-muted">Fecha:{{ $entrada->created_at}}</small></p>
                            <h5 class="card-title">COCINERO:{{$entrada->user_id}}</h5>
                          </div>
                        </div>
                   </div>
                   <div class="card-footer bg-transparent border-success">
                    <a href="{{URL::action('EntradasController@edit',$entrada->id)}}">
                        <button type="button" class="btn btn-info btn-sm ">
                        <i class="far fa-edit"></i>
                        </button> 
                    </a>

                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar-{{$entrada->id}}">
                       <i class="far fa-trash-alt"></i>
                    </button>   
                    </div>
            </div>
    @endforeach  
</div>
@endsection
