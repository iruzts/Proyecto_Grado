<!-- Modal -->
<div class="modal fade" name="modalequipo" id="modalcrearequipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="/recepcion" method="POST" id=>
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrar Equipo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tipo Equipo</label>
                                <select name="tipoequipo" class="select2" data-placeholder="Seleccione Equipo"
                                    style="width: 100%;">
                                    @foreach ($equipos as $equipo)
                                        <option value="{{ $equipo['id'] }}">{{ $equipo['descripcion'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Marca</label>
                                <select name="marca" class="select2" data-placeholder="Seleccione Marca"
                                    style="width: 100%;">
                                    @foreach ($marcas as $marca)
                                        <option value="{{ $marca['id'] }}">{{ $marca['marca'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Modelo</label>
                                <input type="text" class="form-control" id="nombre" name="modelo"
                                    placeholder="Introduca Modelo" tabindex="1">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tipo</label>
                                <select name="tipo" id="tipo" class="form-control" data-placeholder="Seleccione"
                                    style="width: 100%;">
                                    <option value="Serie">Nยบ de Serie</option>
                                    <option value="Generico">Generico</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Identificador</label>
                                <input type="text" class="form-control" id="serie" name="serie"
                                    placeholder="Numero de Serie " tabindex="1">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" name="submit2"  class="btn btn-primary float-right  mr-1">Guardar</button>
                    <button type="button" class="btn btn-secondary float-right  mr-1" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
