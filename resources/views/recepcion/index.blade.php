@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> <a href="recepcion/create" class="btn btn-primary">Nuevo</a>
            </h3>
            <div class="card-tools">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <span class="badge badge-primary">Label</span>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="recepcion" class="table table-bordered shadow-lg mt-4" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Nº Tiket</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Equipo</th>
                        <th scope="col">Recepcion</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Entrega</th>
                        <th scope="col">Trabajo realizado</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recepcions as $recepcion)
                        <tr>
                            <th>{{ $recepcion->id }}</th>
                            <th>{{ $recepcion->clientes->nombre }}</th>
                            <th>{{ $recepcion->equipos->descripcion }}</th>
                            <th>{{ $recepcion->fechadeingreso }}</th>
                            <th>Recibido</th>
                            <th>{{ $recepcion->fechadeentrega }}</th>
                            <th>{{ $recepcion->problema }}</th>
                            <th>
                                <a class="btn btn-info" href="/recepcion/{{ $recepcion->id }}/edit">completar</a>
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
        <div class="card-footer">
        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /.card -->

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#recepcion').DataTable();
        });
    </script>
@stop
