@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Categoria Equipos </h1>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="dash">Principal</a></li>
                        <li class="breadcrumb-item active">Configuracion</li>
                        <li class="breadcrumb-item active">Equipos</li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <a href="equipo/create" class="btn btn-primary float-right btn-sm mr-1" tabindex="4">Nueva Equipo</a>
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
                    @foreach ($equipo as $equipo)
                        <tr>
                            <th>{{ $equipo->id }}</th>
                            <th>{{ $equipo->descripcion }}</th>
                            <th>
                                <a class="btn btn-xs btn-default text-primary  shadow" title="Edit"
                                    href="/equipo/{{ $equipo->id }}/edit"><i class="fa fa-lg fa-fw fa-pen"></i></a>
                                <form action="{{ route('equipo.destroy', $equipo->id) }}" method="post"
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
