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
                    <li class="breadcrumb-item active"><a>Taller</a></li>
                    <li class="breadcrumb-item active"><a>Ordenes</a></li>
                </ol>
            </div>
            <div class="col-sm-6">
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Nueva Orden de Trabajo</h3>
            <div class="card-tools">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="/recepcion" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Cliente</label>
                            <div class="input-group-append">
                                <select name="Ncliente" class="select2" data-placeholder="Seleccione Cliente" style="width: 100%;">
                                    @foreach ($clientes as $cliente)
                                        <option value="{{ $cliente['id'] }}">{{ $cliente['nombre'] }}</option>
                                    @endforeach
                                </select>
                                <span class="input-group-append">
                                    <a href="cliente/create" type="button" class="btn btn-primary btn-flat"><i
                                            class="fas fa-plus"></a></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label>Equipo</label>
                        <div class="input-group-append">
                            <select name="NEquipo"  class="select2" data-placeholder="Seleccione Equipo" style="width: 100%;">
                                @foreach ($equipos as $equipo)
                                    <option value="{{ $equipo['id'] }}">{{ $equipo['descripcion'] }}</option>
                                @endforeach
                            </select>
                            <span class="input-group-append">
                                <a href="cliente/create" type="button" class="btn btn-primary btn-flat"><i
                                        class="fas fa-plus"></a></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Prioridad</label>
                            <select name="prioridad" class="form-control" style="width: 100%;">
                                <option>Alta</option>
                                <option>Normal</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Area</label>
                            <select name="area" class="form-control" style="width: 100%;">
                                <option>Entrada</option>
                                <option>Salida</option>
                                <option>Reparacion</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Estado</label>
                            <select name="estado" class="form-control" style="width: 100%;">
                                <option>Chequeo</option>
                                <option>Sin Estado</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Diagnostico</label>
                            <select name="diagnostico" class="form-control" style="width: 100%;">
                                <option>Si</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Garantia</label>
                            <select name="garantia" class="form-control" style="width: 100%;">
                                <option>SI</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input name="contrasena" class="form-control" style="width: 100%;">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Fecha Prometida</label>
                            <input name="fechaE" type="date" class="form-control" placeholder="Enter ...">
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <!-- text input -->
                        <label>Presupuesto</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">L</span>
                            </div>
                            <input name="presupuesto" type="text" class="form-control" placeholder="Importe">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <!-- text input -->
                        <label>Adelanto</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">L</span>
                            </div>
                            <input name="adelanto" type="text" class="form-control" placeholder="Importe">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Desperfecto</label>
                            <textarea name="problema" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- textarea -->
                        <div class="form-group">
                            <label>Descripcion</label>
                            <textarea name="observacion" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Accesorios</label>
                            <select name="accesorio" class="select2" multiple="multiple"
                                data-placeholder="seleccionar accesorios" style="width: 100%;">
                                @foreach ($accesorios as $accesorio)
                                    <option value="{{ $accesorio['id'] }}">{{ $accesorio['descrip_ac'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary float-right btn-sm mr-1"
                                tabindex="5">Guardar</button>
                            <a href="/recepcion" class="btn btn-secondary float-right btn-sm mr-1" tabindex="4">Cancelar</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-footer -->
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
@stop
