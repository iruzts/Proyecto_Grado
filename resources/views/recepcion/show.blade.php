@extends('adminlte::page')

@section('content_header')
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
                    <li class="breadcrumb-item active"><a>Taller</a></li>
                    <li class="breadcrumb-item active"><a>Ordenes</a></li>
                </ol>
            </div>
            <div class="col-sm-6">
                <a href="/recepcion" class="btn btn-primary float-right btn-sm mr-1" tabindex="4">Asignar Responsable</a>
                <a href="/recepcion/modal/edit" class="btn btn-primary float-right btn-sm mr-1" tabindex="4">Editar</a>
                <a href="/recepcion" class="btn btn-primary float-right btn-sm mr-1" tabindex="4">Imprimir</a>
                <a href="/recepcion" class="btn btn-secondary float-right btn-sm mr-1" tabindex="4">Regresar</a>
            </div>
        </div>
    </div><!-- /.container-fluid -->
@stop

@section('content')
    @if (session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Detalles de Orden</h3>
            <div class="card-tools">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="/recepcion" method="POST" class="needs-validation" novalidate>
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="m-0">Cliente</h5>
                            </div>
                            <div class="card-body">
                                <b>Nombre:</b> {{ $Equipo->clientes->nombre }}</br>
                                <b>Telefono:</b> {{ $Equipo->clientes->telefono }}</br>
                                <b>Direccion:</b> {{ $Equipo->clientes->direccion }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="m-0">Detalle del Equipo</h5>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card-body">
                                        <b>Equipo: </b> {{ $Equipo->tipoequipos->nombre }} <br>
                                        <b>Marca:</b> {{ $Equipo->marcas->nombre }}<br>
                                        <b>Color:</b> {{ $Equipo->colors->nombre }} <br>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card-body">
                                        <b>Modelo: </b> {{ $Equipo->modelo }} <br>
                                        <b>Serie:</b> {{ $Equipo->serie }}<br>
                                        <b>Contraseña:</b> {{ $Equipo->clave }} <br>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label for="inputproblema">Problemas Presentados</label>
                            <textarea id="inputproblema" name="problema" class="form-control" rows="3"
                                placeholder="Detalles de problemas presentados" required
                                disabled>{{ $Equipo->problema }}</textarea>
                            <div class="invalid-tooltip">
                                Por favor detallar problema.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Accesorios</label>
                            <textarea name="Accesorios" class="form-control" rows="3"
                                placeholder="accesorios dejados con el equipo"
                                disabled>{{ $Equipo->accesorios }}</textarea>
                        </div>
                    </div>
                </div>
            </form>
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
    <script src="public/js/select2.full.min.js"></script>
    <script>
        $(function() {
            $('.select2').select2()
        });
    </script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
@stop
