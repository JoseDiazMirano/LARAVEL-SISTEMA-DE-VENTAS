@extends('layouts.app')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h2>EDITAR USUARIO:{{ $user->name }}</h2>
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




 <form action="{{route('usuarios.update',$user->id)}}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="row">
            <div class="form-group col-md-6">
            <label>NOMBRE</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" placeholder="Ingrese su Nombre">
            </div>
            <div class="form-group col-md-6">
            <label>E-MAIL</label>
            <input type="email" name="email" class="form-control"  value="{{ $user->email }}"placeholder="Ingrese su E-mail">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
            <label>CONTRASEÑA<span class="small">(Opcional)</span></label>
            <input type="password"  name="password" class="form-control" placeholder="Ingrese su Contraseña">
            </div>
            <div class="form-group col-md-6">
            <label>CONFIRME CONTRASEÑA<span class="small">(Opcional)</span></label>
            <input type="password" name="password_confirmation" class="form-control"  placeholder="Confirme su Contraseña">
            </div>
            </div>
            <div class="row">
            <div class="form-group col-md-6">
                <label for="email">ROL</label>
                    <select name="rol" class="form-control">
                        <option selected disabled>Elige un rol para este usuario</option>

                        @foreach($roles as $role)
                           @if($role->name == str_replace(array('["', '"]'),'', $user->tieneRol()))
                             <option value="{{ $role->id}}" selected>{{$role->name}}</option>
                           @else
                             <option value="{{ $role->id}}">{{$role->name}}</option>
                           @endif
                        @endforeach
                    </select>
            </div>
            <div class="form-group cold-md-6">
                <label>Imagen</label>
                <input type="file" name="imagen" class="form-control">
                @if($user->imagen != "")
                <img src="{{asset('imagenes/'.$user->imagen)}}" alt="{{$user->imagen}}" height="50px" width="50px">
                @endif
            </div>
        </div> 
        <div class="row"> 
            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
        </div>
 </form>
</div>
@endsection