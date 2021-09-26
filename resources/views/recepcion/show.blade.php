@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Detalles Orden Nº{{$recepcion->id}}</h1>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-left">
                    <li class="breadcrumb-item"><a href="dash">Principal</a></li>
                    <li class="breadcrumb-item active"><a>Taller</a></li>
                    <li class="breadcrumb-item active"><a>Orden</a></li>
                    <li class="breadcrumb-item active"><a>Detalles</a></li>
                </ol>
            </div>
            <div class="col-sm-6">
                <a href="/recepcion/create" class="btn btn-primary float-right btn-sm mr-1" tabindex="4">Editar</a>
                <a href="/recepcion/create" class="btn btn-primary float-right btn-sm mr-1" tabindex="4">Regresar</a>
                <a href="/recepcion/create" class="btn btn-primary float-right btn-sm mr-1" tabindex="4">Imprimir Orden</a>
                <a href="/recepcion/create" class="btn btn-primary float-right btn-sm mr-1" tabindex="4">Mover de Area</a>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>@stop

@section('content')
    @csrf
    @method('PUT')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Cliente</h5>
                    </div>
                    <div class="card-body">
                        <b>Nombre:</b> {{$recepcion->Clientes->nombre}}</br>
                        <b>Telefono:</b> {{$recepcion->Clientes->telefono}}</br>
                        <b>Correo:</b> {{$recepcion->Clientes->nombre}}
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Equipo</h5>
                    </div>
                    <div class="card-body">
                        <b>Marca:</b>{{$recepcion->id}} 
                        <b>Modelo:</b><br>
                        <b>Numero de Serie:</b><br>
                        <b>Contraseña:</b> 
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Orden Nº</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 invoice-col">
                                <b>Responsable:</b><br>
                                <b>Ingresado:</b> {{$recepcion->fechadeingreso}}<br>
                                <b>Fecha Prometida:</b> {{$recepcion->fechadeentrega}}
                            </div>
                            <div class="col-sm-6 invoice-col">
                                <b>Presupuesto:</b> {{$recepcion->presupuesto}}<br>
                                <b>Adelanto:</b> {{$recepcion->adelanto}}<br>
                                <b>Garantia:</b> {{$recepcion->garantia}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Desperfecto</h5>
                    </div>
                    <div class="card-body">
                        {{$recepcion->problema}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Descripcion</h5>
                    </div>
                    <div class="card-body">
                        {{$recepcion->observacion}}
                    </div>
                </div>
            </div>
        </div>
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
