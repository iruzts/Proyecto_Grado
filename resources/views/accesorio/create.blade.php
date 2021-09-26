@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
    <!-- general form elements -->
    <div class="card card">
        <div class="card-header">
            <h3 class="card-title">Agregar Accesorio</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/accesorio" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Accesorio</label>
                            <input type="text" class="form-control" id="nombre" name="accesorio" placeholder="Introducir Nombre" tabindex="1">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right btn-sm mr-1" tabindex="5">Guardar</button>
                <a href="/accesorio" class="btn btn-secondary float-right btn-sm mr-1" tabindex="4">Cancelar</a>
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
