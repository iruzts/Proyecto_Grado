@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Lista de Marcas</h1>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="dash">Principal</a></li>
                        <li class="breadcrumb-item active">Configuracion</li>
                        <li class="breadcrumb-item active">Marcas</li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <a href="marca/create" class="btn btn-primary float-right btn-sm mr-1" tabindex="4">Agregar Marca</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@stop

@section('content')
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <table id="equipo" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($marcas as $marca)
                        <tr>
                            <th>{{ $marca->id }}</th>
                            <th>{{ $marca->marca}}</th>
                            <th>
                                <a class="btn btn-xs btn-default text-primary  shadow" title="Edit"
                                    href="/marca/{{ $marca->id }}/edit"><i class="fa fa-lg fa-fw fa-pen"></i></a>
                                <form action="{{ route('marca.destroy', $marca->id) }}" method="post"
                                    style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-xs btn-default text-danger shadow" title="Delete"> <i
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
        <!-- /.card-body -->
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
    <script>
        $(document).ready(function() {
            $('#equipo').DataTable();
        });
    </script>
@stop
