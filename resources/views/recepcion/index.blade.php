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
                                <table id="recepcion1" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nº Tiket</th>
                                            <th scope="col">Prioridad</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Modelo</th>
                                            <th scope="col">Cliente</th>
                                            <th scope="col">Responsable</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($recepcions as $recepcion)
                                            @if ($recepcion->area == 'Entrada')
                                                <tr>
                                                    <th>{{ $recepcion->id }}</th>
                                                    <th>{{ $recepcion->prioridad }}</th>
                                                    <th>{{ $recepcion->estado }}</th>
                                                    <th>{{ $recepcion->modelo }}</th>
                                                    <th>{{ $recepcion->Clientes->nombre }}</th>
                                                    <th>responsable</th>
                                                    <th>{{ $recepcion->presupuesto }}</th>
                                                    <th>
                                                        <a href="/recepcion/{{$recepcion->id}}" class="btn btn-xs btn-default text-teal mx-1 shadow"
                                                            title="Details">
                                                            <i class="fa fa-lg fa-fw fa-eye"></i>
                                                        </a>
                                                        <a href="/recepcion/{{$recepcion->id}}/edit" class="btn btn-xs btn-default text-primary mx-1 shadow"
                                                            title="Edit">
                                                            <i class="fa fa-lg fa-fw fa-pen"></i>
                                                        </a>
                                                        <a class="btn btn-xs btn-default text-danger mx-1 shadow"
                                                            title="Delete">
                                                            <i class="fa fa-lg fa-fw fa-trash"></i>
                                                        </a>
                                                    </th>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>

                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="reparacion" role="tabpanel"
                                aria-labelledby="custom-tabs-four-profile-tab">
                                <table id="recepcion2" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nº Tiket</th>
                                            <th scope="col">Prioridad</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Modelo</th>
                                            <th scope="col">Cliente</th>
                                            <th scope="col">Responsable</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($recepcions as $recepcion)
                                            @if ($recepcion->area == 'Reparacion')
                                                <tr>
                                                    <th>{{ $recepcion->id }}</th>
                                                    <th>{{ $recepcion->prioridad }}</th>
                                                    <th>{{ $recepcion->estado }}</th>
                                                    <th>{{ $recepcion->modelo }}</th>
                                                    <th>{{ $recepcion->Clientes->nombre }}</th>
                                                    <th>responsable</th>
                                                    <th>{{ $recepcion->presupuesto }}</th>
                                                    <th>
                                                        <a class="btn btn-xs btn-default text-primary mx-1 shadow"
                                                            title="Edit">
                                                            <i class="fa fa-lg fa-fw fa-pen"></i>
                                                        </a>
                                                        <a class="btn btn-xs btn-default text-danger mx-1 shadow"
                                                            title="Delete">
                                                            <i class="fa fa-lg fa-fw fa-trash"></i>
                                                        </a>
                                                        <a class="btn btn-xs btn-default text-teal mx-1 shadow"
                                                            title="Details">
                                                            <i class="fa fa-lg fa-fw fa-eye"></i>
                                                        </a>
                                                    </th>
                                                </tr>
                                            @endif
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
                                            <th scope="col">Nº Tiket</th>
                                            <th scope="col">Prioridad</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Modelo</th>
                                            <th scope="col">Cliente</th>
                                            <th scope="col">Responsable</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($recepcions as $recepcion)
                                            @if ($recepcion->area == 'Salida')
                                                <tr>
                                                    <th>{{ $recepcion->id }}</th>
                                                    <th>{{ $recepcion->prioridad }}</th>
                                                    <th>{{ $recepcion->estado }}</th>
                                                    <th>{{ $recepcion->modelo }}</th>
                                                    <th>{{ $recepcion->Clientes->nombre }}</th>
                                                    <th>responsable</th>
                                                    <th>{{ $recepcion->presupuesto }}</th>
                                                    <th>
                                                        <a class="btn btn-xs btn-default text-primary  shadow" title="Edit">
                                                            <i class="fa fa-lg fa-fw fa-pen"></i>
                                                        </a>
                                                        <a class="btn btn-xs btn-default text-teal shadow" title="Details">
                                                            <i class="fa fa-lg fa-fw fa-eye"></i>
                                                        </a>
                                                        <a class="btn btn-xs btn-default text-danger shadow" title="Delete">
                                                            <i class="fa fa-lg fa-fw fa-trash"></i>
                                                        </a>
                                                    </th>
                                                </tr>
                                            @endif
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
