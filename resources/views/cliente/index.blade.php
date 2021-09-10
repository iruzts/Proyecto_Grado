@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Cliente</h1>
@stop

@section('content')
<a href="cliente/create" class="btn btn-primary">Crear</a>
<div class="card">
    <!-- /.card-header -->
    <div class="card-body">
      <table id="clientes" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Direccion</th>
          <th scope="col">Tel/Cel</th>
          <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <th>{{$cliente->id}}</th>
                    <th>{{$cliente->nombre}}</th>
                    <th>{{$cliente->direccion}}</th>
                    <th>{{$cliente->telefono}}</th>
                    <th>
                        <a class="btn btn-info" href="/cliente/{{$cliente->id}}/edit">Editar</a>
                        <form action="{{route('cliente.destroy', $cliente->id)}}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Eliminar</button>
                        </form>
                    </th>
                </tr>

            @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>Rendering engine</th>
          <th>Browser</th>
          <th>Platform(s)</th>
          <th>Engine version</th>
          <th>CSS grade</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#clientes').DataTable({
              "lengthMenu": [[5, 10, 50,-1], [5,10,50,"all"]]
          });
      } );
  </script>
@stop
