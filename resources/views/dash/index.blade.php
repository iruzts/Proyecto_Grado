@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>
                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>
                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>

                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>
                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="recepcion">Entrada</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Reparacion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Salida</a>
                </li>
            </ul>
        </div>
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
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
        <script>
            console.log('Hi!');
        </script>
    @stop
