@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Administración de Taller</h1>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="dash">Principal</a></li>
                        <li class="breadcrumb-item active">Taller</li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <a href="/recepcion/create" class="btn btn-primary float-right btn-sm mr-1" tabindex="4">Nueva Orden</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@stop

@section('content')
    <div class="container-fluid pt-0">
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="card card-primary card-outline card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#entrada"
                                    role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Entrada</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                    href="#reparacion" role="tab" aria-controls="custom-tabs-four-profile"
                                    aria-selected="false">Reparacion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill"
                                    href="#salida" role="tab" aria-controls="custom-tabs-four-messages"
                                    aria-selected="false">Salida</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                            <div class="tab-pane fade show active" id="entrada" role="tabpanel"
                                aria-labelledby="custom-tabs-four-home-tab">
                                <div class="table-responsive">
                                    <table id="recepcion1" class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Cliente</th>
                                                <th scope="col">Telefono</th>
                                                <th scope="col">Tipo</th>
                                                <th scope="col">Marca</th>
                                                <th scope="col">Color</th>
                                                <th scope="col">Modelo</th>
                                                <th scope="col">Estado</th>
                                                <th scope="col">Fecha Ingreso</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($equipos as $equipo)
                                                <tr>
                                                    <th scope="row">{{ $equipo->id }}</th>
                                                    <td>{{ $equipo->clientes->nombre }}</td>
                                                    <td>{{ $equipo->clientes->telefono }}</td>
                                                    <td>{{ $equipo->tipoequipos->nombre }}</td>
                                                    <td>{{ $equipo->marcas->nombre }}</td>
                                                    <td>{{ $equipo->colors->nombre }}</td>
                                                    <td>{{ $equipo->modelo }}</td>
                                                    <td>Estado</td>
                                                    <td>Fecha</td>
                                                    <td>
                                                        <a href="/recepcion/{{ $equipo->id }}"
                                                            class="btn btn-xs btn-default text-teal mx-1 shadow"
                                                            title="Details">
                                                            <i class="fa fa-lg fa-fw fa-eye"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-xs btn-default text-primary mx-1 shadow"
                                                            title="Edit">
                                                            <i class="fa fa-lg fa-fw fa-pen"></i>
                                                        </a>
                                                        <a class="btn btn-xs btn-default text-danger mx-1 shadow"
                                                            title="Delete">
                                                            <i class="fa fa-lg fa-fw fa-trash"></i>
                                                        </a>
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
                            <div class="tab-pane fade" id="reparacion" role="tabpanel"
                                aria-labelledby="custom-tabs-four-profile-tab">
                                <table id="recepcion2" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Cliente</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">Tipo</th>
                                            <th scope="col">Marca</th>
                                            <th scope="col">Color</th>
                                            <th scope="col">Modelo</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Fecha Ingreso</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($equipos as $equipo)
                                            <tr>
                                                <th scope="row">{{ $equipo->id }}</th>
                                                <td>{{ $equipo->clientes->nombre }}</td>
                                                <td>{{ $equipo->clientes->telefono }}</td>
                                                <td>{{ $equipo->tipoequipos->nombre }}</td>
                                                <td>{{ $equipo->marcas->nombre }}</td>
                                                <td>{{ $equipo->colors->nombre }}</td>
                                                <td>{{ $equipo->modelo }}</td>
                                                <td>Estado</td>
                                                <td>Fecha</td>
                                                <td>
                                                    <a href="/recepcion/{{ $equipo->id }}"
                                                        class="btn btn-xs btn-default text-teal mx-1 shadow"
                                                        title="Details">
                                                        <i class="fa fa-lg fa-fw fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-xs btn-default text-primary mx-1 shadow"
                                                        title="Edit">
                                                        <i class="fa fa-lg fa-fw fa-pen"></i>
                                                    </a>
                                                    <a class="btn btn-xs btn-default text-danger mx-1 shadow"
                                                        title="Delete">
                                                        <i class="fa fa-lg fa-fw fa-trash"></i>
                                                    </a>
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
                            <div class="tab-pane fade" id="salida" role="tabpanel"
                                aria-labelledby="custom-tabs-four-messages-tab">
                                <table id="recepcion3" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Cliente</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">Tipo</th>
                                            <th scope="col">Marca</th>
                                            <th scope="col">Color</th>
                                            <th scope="col">Modelo</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Fecha Ingreso</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($equipos as $equipo)
                                            <tr>
                                                <th scope="row">{{ $equipo->id }}</th>
                                                <td>{{ $equipo->clientes->nombre }}</td>
                                                <td>{{ $equipo->clientes->telefono }}</td>
                                                <td>{{ $equipo->tipoequipos->nombre }}</td>
                                                <td>{{ $equipo->marcas->nombre }}</td>
                                                <td>{{ $equipo->colors->nombre }}</td>
                                                <td>{{ $equipo->modelo }}</td>
                                                <td>Estado</td>
                                                <td>Fecha</td>
                                                <td>
                                                    <a href="/recepcion/{{ $equipo->id }}"
                                                        class="btn btn-xs btn-default text-teal mx-1 shadow"
                                                        title="Details">
                                                        <i class="fa fa-lg fa-fw fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-xs btn-default text-primary mx-1 shadow"
                                                        title="Edit">
                                                        <i class="fa fa-lg fa-fw fa-pen"></i>
                                                    </a>
                                                    <a class="btn btn-xs btn-default text-danger mx-1 shadow"
                                                        title="Delete">
                                                        <i class="fa fa-lg fa-fw fa-trash"></i>
                                                    </a>
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
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.card -->

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#recepcion1').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#recepcion2').DataTable();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#recepcion3').DataTable();
        });
    </script>
@stop
