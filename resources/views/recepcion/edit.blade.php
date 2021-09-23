@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <!-- Formulario -->
    <div class="card-body">
        <form action="/recepcion/{{ $recepcion->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-4">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nombre de Cliente</label>
                        <input name="Ncliente" type="text" class="form-control" placeholder="Enter ..."
                            value="{{ $recepcion->clientes->nombre }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Equipo</label>
                        <input name="NEquipo" type="text" class="form-control" placeholder="Enter ..." value="{{$recepcion->equipos->descripcion}}">
                    </div>
                </div>
                <div class="col-sm-3">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Marca</label>
                        <input name="marca" type="text" class="form-control" placeholder="Enter ..." value="{{$recepcion->marca}}">
                    </div>
                </div>
                <div class="col-sm-3">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Modelo</label>
                        <input name="modelo" type="text" class="form-control" placeholder="Enter ..." value="{{$recepcion->modelo}}">
                    </div>
                </div>
                <div class="col-sm-3">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Serie</label>
                        <input name="serie" type="text" class="form-control" placeholder="Enter ..." value="{{$recepcion->serie}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Tecnico Encargado</label>
                        <input name="tecnicoE" type="text" class="form-control" placeholder="Enter ..." value="{{$recepcion->tecnicos->nombre}}">
                    </div>
                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Fecha de Ingreso</label>
                        <input name="fechaI" type="date" class="form-control" placeholder="Enter ..." value="{{$recepcion->fechadeingreso}}">
                    </div>
                </div>
                <div class="col-sm-4">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Fecha Probable de Entrega</label>
                        <input name="fechaE" type="date" class="form-control" placeholder="Enter ..." value="{{$recepcion->fechadeentrega}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <!-- textarea -->
                    <div class="form-group">
                        <label>Observaciones</label>
                        <textarea name="observacion" class="form-control" rows="3" placeholder="Enter ..." >{{$recepcion->observacion}}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <!-- textarea -->
                    <div class="form-group">
                        <label>Problema Presentado</label>
                        <textarea name="problemas" class="form-control" rows="3" placeholder="Enter ...">{{$recepcion->problemas}}</textarea>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="/reparacion" class="btn btn-secondary" tabindex="4">Cancelar</a>
                <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
            </div>
        </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
    <script src="public/js/select2.full.min.js"></script>
    <script>
        $(function() {
            $('.select2').select2()
        });
    </script>
@stop
