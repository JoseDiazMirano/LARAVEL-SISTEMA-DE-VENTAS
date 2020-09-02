@extends('layouts.app')

@section('contenido')
<div class="container">
<h2>Roles de Usuario</h2>
  @include('roles.modal')
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
    </tr>
  </thead>
  <tbody>
  @foreach($roles as $role)
    <tr>
      <th scope="row">{{$role->id}}</th>
      <td>{{$role->name}}</td>
    </tr>
   @endforeach 
  </tbody>
</table>  
</div>

@endsection