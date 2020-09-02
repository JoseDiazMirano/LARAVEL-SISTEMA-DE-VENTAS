@extends('layouts.app')

@section('contenidoch')
@include('pedidos.todos.modal') 
       <div class="mt-3 row-cols-1 card-columns">
            @foreach($pedidos as $pedido)

            @include('pedidos.todos.modal-delete')
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                        <div class="col-md-4">
                         <img src="{{asset('imagenes/'.$pedido->image)}}" alt="{{$pedido->image}}" class="card-img-top">
                        </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$pedido->titulo}}</h5>
                            <p class="card-text">{{$pedido->texto}}</p>
                            <p class="card-text"><small class="text-muted">Fecha:{{ $pedido->created_at}}</small></p>
                            <h5 class="card-text">PRECIO: S/{{$pedido->precio}}</h5>
                          </div>
                        </div>
                   </div>
                   <div class="card-footer bg-transparent border-success">
                    <a href="{{URL::action('PedidosController@edit',$pedido->id)}}">
                        <button type="button" class="btn btn-info btn-sm ">
                        <i class="far fa-edit"></i>
                        </button> 
                    </a>

                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar-{{$pedido->id}}">
                       <i class="far fa-trash-alt"></i>
                    </button>   

                    </div>
            </div>
            @endforeach  
       </div>
@endsection
