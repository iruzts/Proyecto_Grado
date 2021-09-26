@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<!-- general form elements -->
<div class="card card">
  <div class="card-header">
    <h3 class="card-title">Agregar Cliente</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="/cliente" method="POST">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introducir Nombre" tabindex="1">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Direccion</label>
        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Introducir Direccion" tabindex="2">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Tel/Cel</label>
        <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Introducir Celular/Telefono" tabindex="3">
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <a href="/cliente" class="btn btn-secondary" tabindex="4">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
    </div>
  </form>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop