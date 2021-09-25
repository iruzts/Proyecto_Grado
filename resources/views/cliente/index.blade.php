@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3><i class="fas fa-users"></i>
                        Listas de Clientes</h3>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="dash">Principal</a></li>
                        <li class="breadcrumb-item active">Clientes</li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <a href="/cliente/create" class="btn btn-primary float-right btn-sm mr-1" tabindex="4">Nuevo Cliente</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
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
                                <a class="btn btn-xs btn-default text-primary mx-1"
                                    href="/cliente/{{ $cliente->id }}/edit"> <i class="fa fa-lg fa-fw fa-pen"></i>
                                </a>
                                <form action="{{ route('cliente.destroy', $cliente->id) }}" method="post"
                                    style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-xs btn-default text-danger mx-1"> <i
                                            class="fa fa-lg fa-fw fa-trash"></i>
                                    </button>
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
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#table2').DataTable();
        });
    </script>
@stop
