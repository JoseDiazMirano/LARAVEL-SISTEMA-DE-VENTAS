@include('usuarios.modal-delete')
    <a href="{{route('usuarios.show',$id)}}">
        <button type="button" class="btn btn-success"><i class="fas fa-eye"></i></button>
    </a>
    <a href="{{route('usuarios.edit',$id)}}">
        <button type="button" class="btn btn-primary"><i class="fas fa-user-edit"></i></button>
    </a>
 
    <button type="button" class="btn btn-danger" data-target="#delete-{{$id}}" data-toogle="modal"><i class="fas fa-user-times"></i>
    </button>

