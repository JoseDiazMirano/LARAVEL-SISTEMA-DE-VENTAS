@extends('layouts.app')

@section('contenidoch')

{!! Form::open(['action' => ['PedidosController@update', $pedido->id],'method' => 'PATCH','files'=>'true']) !!}
{{ Form::token() }}
<div class="card text-center mx-auto" style="width: 350px;">
  <div class="card-header">
    <input type="text" name="titulo" class="form-control" value="{{ $pedido->titulo }}"></input>
  </div>
  <div class="card-body">
       <textarea name="texto" id="" class="form-control" rows="6">{{ $pedido->texto }}</textarea>
  </div>
  <div class="card-header">
        <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
                <div class="input-group-text">S/</div>
            </div>
            <input type="number" name="precio" class="form-control" id="recipient-name"value="{{ $pedido->precio }}"></input>
      </div>
  </div> 
  <div class="form-group cold-md-6">
      <label>Imagen</label>
         {{Form::file('image')}}
           @if($pedido->image != "")
            <img src="{{asset('imagenes/'.$pedido->image)}}" alt="{{$pedido->image}}" height="50px" width="50px">
           @endif
  </div>

  <div class="card-footer text-muted small">
     {{ $pedido->updated_at }}
    <a href="{{URL::action('PedidosController@edit',$pedido->id)}}">
            <button type="submit" class="btn btn-info  ">
            <i class="far fa-save"></i>
            </button> 
    </a>
    <a href="{{URL::action('PedidosController@index')}}">
           <button type="button" class="btn btn-danger  float-right mr-1 ">
           <i class="far fa-window-close"></i>
           </button> 
    </a>
  </div>
</div>
{!! Form::close() !!}

@endsection
@section('contenido')

{!! Form::open(['action' => ['PedidosController@update', $pedido->id],'method' => 'PATCH','files'=>'true']) !!}
{{ Form::token() }}
<div class="card text-center mx-auto" style="width: 350px;">
  <div class="card-header">
    <input type="text" name="titulo" class="form-control" value="{{ $pedido->titulo }}"></input>
  </div>
  <div class="card-body">
       <textarea name="texto" id="" class="form-control" rows="6">{{ $pedido->texto }}</textarea>
  </div>
  <div class="form-group">
        <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
                <div class="input-group-text">S/</div>
            </div>
            <input type="number" name="precio" class="form-control" id="recipient-name"value="{{ $pedido->precio }}"></input>
      </div>
  </div>
  <div class="form-group cold-md-6">
                <label>Imagen</label>
                 {{Form::file('image')}}
                @if($pedido->image != "")
                <img src="{{asset('imagenes/'.$pedido->image)}}" alt="{{$pedido->image}}" height="50px" width="50px">
                @endif
  </div>
  <div class="card-footer text-muted small">
     {{ $pedido->updated_at }}
    <a href="{{URL::action('PedidosController@edit',$pedido->id)}}">
            <button type="submit" class="btn btn-info ">
            <i class="far fa-save"></i>
            </button> 
    </a>
    <a href="{{URL::action('PedidosController@index')}}">
           <button type="button" class="btn btn-danger float-right mr-1 ">
           <i class="far fa-window-close"></i>
           </button> 
    </a>
  </div>
</div>
{!! Form::close() !!}
@endsection