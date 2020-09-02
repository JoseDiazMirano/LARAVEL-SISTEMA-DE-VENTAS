<div class="container">
<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">PRODUCTO DEL DIA</button>
</div>

{!! Form::open(['url' => 'pedidos/todos','files'=>'true']) !!}
  {{Form::token()}}
   
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
       
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">PRODUCTO:</label>
                <input type="text" name="titulo" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">DESCRIPCION:</label>
                <textarea class="form-control" name="texto" id="message-text"></textarea>
            </div>
            <div class="form-group">
             <label for="message-text" class="col-form-label">PRECIO:</label>
               <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                       <div class="input-group-text">S/</div>
                    </div>
                  <input type="number" name="precio" class="form-control" id="recipient-name">
               </div>
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">IMAGEN DEL PRODUCTO:</label>
                <!--<input type="file" name="image" class="form-control" id="recipient-name">-->
                {{Form::file('image')}}
            </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
            <button type="submit" class="btn btn-primary">GUARDAR PRODUCTO</button>
        </div>
        </div>
    </div>
    </div>
{!! Form::close() !!}