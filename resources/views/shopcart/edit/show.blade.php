@extends('layouts.app')

@section('contenidousu')
<div class="col-lg-6 mb-4 text-center">
<h1>{{ Auth::user()->name}}</h1>
<h3>{{ Auth::user()->email}}</h3>

<a href="{{url('shopcart/editusu')}}"><button type="button" class="btn btn-info">EDITAR</button></a>
</div>

@endsection