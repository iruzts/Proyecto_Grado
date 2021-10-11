@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
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
                <button type="button" class="btn btn-primary float-right btn-sm mr-1" data-toggle="modal"
                    data-target="#modalcrearclientes">
                    Nuevo Cliente
                </button>
            </div>
        </div>
    </div><!-- /.container-fluid -->
@stop

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table id="table2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Identidad</th>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Tel/Cel</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <th>{{ $cliente->id }}</th>
                            <td>{{ $cliente->dni }}</td>
                            <td>{{ $cliente->nombre }}</td>
                            <td>{{ $cliente->direccion }}</td>
                            <td>{{ $cliente->telefono }}</td>
                            <td>
                                <button class="btn btn-default text-primary mx-1" href="" data-toggle="modal"
                                    data-target="#modaleditarclientes{{ $cliente->id }}"> <i
                                        class="fa fa-lg fa-fw fa-pen"></i>
                                </button>
                                @include('cliente.modal.edit')
                                <form action="{{ route('cliente.destroy', $cliente->id) }}" method="post"
                                    style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-default text-danger mx-1"> <i
                                            class="fa fa-lg fa-fw fa-trash"></i>
                                    </button>
                                </form>
                            </td>
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
@include('cliente.modal.create')


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
