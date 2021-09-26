@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Cliente</h1>
@stop

@section('content')
    <!-- general form elements -->
    <div class="card card">
        <div class="card-header">
            <h3 class="card-title">AGREGAR EQUIPO</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/equipo" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tipo Equipo</label>
                            <select name="" class="select2" multiple="multiple" data-placeholder="Seleccione Cliente"
                                style="width: 100%;">
                                <option value="">Impresora</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Marca</label>
                            <select name="" class="select2" multiple="multiple" data-placeholder="Seleccione Cliente"
                                style="width: 100%;">
                                <option value="">Dell</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Modelo</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                placeholder="Introducir Nombre" tabindex="1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tipo</label>
                            <select name="" class="select2" multiple="multiple" data-placeholder="Seleccione Cliente"
                                style="width: 100%;">
                                <option value="">Dell</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Identificador</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                placeholder="Introducir Nombre" tabindex="1">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right btn-sm mr-1" tabindex="5">Guardar</button>
                <a href="/equipo" class="btn btn-secondary float-right btn-sm mr-1" tabindex="4">Cancelar</a>
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
    <script>
        $(function() {
            $('.select2').select2()
        });
    </script>
@stop
