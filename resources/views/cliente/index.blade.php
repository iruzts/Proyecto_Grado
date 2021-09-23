@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h3><i class="fas fa-users"></i>
        Listas de Clientes</h3>
@stop

@section('content')

    <a href="cliente/create" class="btn btn-primary"><i class="fas fa-user-plus"></i> Nuevo Cliente</a>
    <table id="table2" class="table table-bordered table-striped" style="width:100%">
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
                    <th>{{ $cliente->id_cliente }}</th>
                    <th>{{ $cliente->nombre }}</th>
                    <th>{{ $cliente->direccion }}</th>
                    <th>{{ $cliente->telefono }}</th>
                    <th>
                        <a class="btn btn-info" href="/cliente/{{ $cliente->id }}/edit">Editar</a>
                        <form action="{{ route('cliente.destroy', $cliente->id) }}" method="post"
                            style="display: inline-block">
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

            </tr>
        </tfoot>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $(document).ready( function () {
            $('#table2').DataTable();
        } );
    </script>
@stop
