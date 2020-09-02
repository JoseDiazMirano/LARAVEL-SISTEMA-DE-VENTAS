@extends('layouts.app')

@section('contenido')
<div class="container">
  <h2>Lista de Usuarios registrados 
    <a href="usuarios/create">
      <button type="button" class="btn btn-success float-right">Agregar Usuario</button>
    </a> 
  </h2>

  <table class="table table-bordered data-table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">Rol</th>
        <th scope="col">Foto</th>
        <th scope="col" width="100px">Opciones</th>
      </tr>
    </thead>

    <tbody>

    </tbody>
  </table>
</div>

@push('scripts')
  <script>
  $(function () {
    var table = $('.data-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('usuarios.index')}}",
      columns: [
        {data: 'id', name:'id'},
        {data: 'name', name:'name'},
        {data: 'email', name:'email'},
        {data: 'rol', name:'rol'},
        {data: 'imagen', name:'imagen', searchable: false},
        {data: 'action', name:'action', orderable: false, searchable: false},
      ]
    });  
  });
  </script>
  @endpush
@endsection


