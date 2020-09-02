@extends('layouts.app')

@section('contenido')
<div class="container">
  <div class="row">
   <div class="col-sm-6">
   <h3>CREAR NUEVO USUARIO</h3>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
   </div>
</div>
<form action="/usuarios" method="POST" enctype="multipart/form-data"> 
@csrf
<div class="row">
    <div class="form-group col-md-6">
      <label>NOMBRE</label>
      <input type="text" name="name" class="form-control" placeholder="Ingrese su Nombre">
    </div>
    <div class="form-group col-md-6">
      <label>E-MAIL</label>
      <input type="email" name="email" class="form-control"  placeholder="Ingrese su E-mail">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-6">
      <label>CONTRASEÑA</label>
      <input type="password"  name="password" class="form-control" placeholder="Ingrese su Contraseña">
      </div>
      <div class="form-group col-md-6">
      <label>CONFIRME CONTRASEÑA</label>
      <input type="password" name="password_confirmation" class="form-control"  placeholder="Confirme su Contraseña">
    </div>
    </div>
      <div class="row">
      <div class="form-group col-md-6">
        <label for="email">ROL</label>
            <select name="rol" class="form-control">
                  <option selected disabled>Elige un rol para este usuario</option>
                  @foreach($roles as $role)
                  <option value="{{ $role->id}}">{{$role->name}}</option>
                  @endforeach
            </select>
      </div>
      <div class="form-group cold-md-6">
          <label>Imagen</label>
          <input type="file" name="imagen" class="form-control">
      </div>
  </div> 
  <div class="row"> 
      <div class="form-group col-md-6">
          <button type="submit" class="btn btn-primary">Registrar</button>
          <button type="reset" class="btn btn-danger">Cancelar</button>
      </div>
  </div>
</form>
</div>
@endsection