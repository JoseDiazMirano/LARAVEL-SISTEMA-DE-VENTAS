
<button type="button" class="btn btn-warning float-right" data-toggle="modal" data-target="#addRole">Crear Rol</button>


{!! Form::open(['url' => 'roles']) !!}
  {{Form::token()}}

    <div class="modal fade" id="addRole" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo Rol de Usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Nombre Del rol:</label>
                <input type="text" name="name" class="form-control" id="recipient-name">
            </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
            <button type="submit" class="btn btn-primary">GUARDAR ROL</button>
        </div>
        </div>
    </div>
    </div>
{!! Form::close() !!}