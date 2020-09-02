@extends('layouts.app')

@section('contenidousu')

 <form action="#" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="row">
            <div class="form-group col-md-6">
            <label>NOMBRE</label>
            <input type="text" name="name" class="form-control" value="" placeholder="Ingrese su Nombre">
            </div>
            <div class="form-group col-md-6">
            <label>E-MAIL</label>
            <input type="email" name="email" class="form-control"  value=""placeholder="Ingrese su E-mail">
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
            <div class="form-group cold-md-6">
                <label>Imagen</label>
                <input type="file" name="imagen" class="form-control">   
            </div>
            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
        </div> 
 </form>
</div>
@endsection