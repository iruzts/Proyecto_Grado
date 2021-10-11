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
            </div>
        </div>
    </div><!-- /.container-fluid -->
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Detalles del Equipo</h3>
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
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label for="inputcliente">Cliente</label>
                            <div class="input-group-append">
                                <select id="inputcliente" name="Ncliente" class="select2"
                                    data-placeholder="Seleccione Cliente" style="width: 100%;" required>
                                    <option selected disabled value="">Seleccione Cliente</option>
                                    @foreach ($clientes as $cliente)
                                        <option value="{{ $cliente['id'] }}">{{ $cliente['nombre'] }}</option>
                                    @endforeach
                                </select>
                                <span class="input-group-append">
                                    <button href="" type="button" class="btn btn-primary btn-flat" data-toggle="modal"
                                        data-target="#modalcrearcli"><i class="fas fa-plus"></button></i>
                                </span>
                                <div class="invalid-tooltip">
                                    Por favor selecciona cliente.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="inputequipo">Tipo de Equipo</label>
                        <div class="input-group-append">
                            <select id="inputequipo" name="TipoEquipo" class="select2"
                                data-placeholder="Seleccione Equipo" style="width: 100%;" required>
                                <option selected disabled value="">Seleccione Equipo</option>
                                @foreach ($tipoequipos as $tipoequipo)
                                    <option value="{{ $tipoequipo['id'] }}">
                                        {{ $tipoequipo['nombre'] }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="invalid-tooltip">
                                Por favor selecciona Equipo.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <!-- text input -->
                        <div class="form-group">
                            <label for="inputmarca">Marca</label>
                            <div class="input-group-append">
                                <select id="inputmarca" name="Marca" class="select2"
                                    data-placeholder="Seleccione Equipo" style="width: 100%;" required>
                                    <option selected disabled value="">Seleccione Marca</option>
                                    @foreach ($marcas as $marca)
                                        <option value="{{ $marca['id'] }}">
                                            {{ $marca['nombre'] }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">
                                    Por favor selecciona Marca.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <!-- text input -->
                        <div class="form-group">
                            <label for="inputcolor">Color</label>
                            <div class="input-group-append">
                                <select id="inputcolor" name="Color" class="select2"
                                    data-placeholder="Seleccione Equipo" style="width: 100%;" required>
                                    <option selected disabled value="">Seleccione Color</option>
                                    @foreach ($colores as $color)
                                        <option value="{{ $color['id'] }}">
                                            {{ $color['nombre'] }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">
                                    Por favor selecciona Color.
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Modelo</label>
                            <input name="Modelo" class="form-control" style="width: 100%;"
                                placeholder="Ingrese el modelo del equipo">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Serie</label>
                            <input name="Serie" class="form-control" style="width: 100%;"
                                placeholder="Ingrese el serie del equipo">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input name="password" class="form-control" style="width: 100%;"
                                placeholder="Si el equipo esta protegido ingrese contraseña">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label for="inputproblema">Problemas Presentados</label>
                            <textarea id="inputproblema" name="problema" class="form-control" rows="3"
                                placeholder="Detalles de problemas presentados" required></textarea>
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
                                placeholder="accesorios dejados con el equipo"></textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="submit3" name="submit3" class="btn btn-primary float-right btn-sm mr-1"
                                tabindex="5" id="btnOpenSaltB">Guardar</button>
                            <a href="/recepcion" class="btn btn-secondary float-right btn-sm mr-1" tabindex="4">Cancelar</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@stop
@include('recepcion.modal.crearc')

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
