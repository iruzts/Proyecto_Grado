<!-- Modal -->
<div class="modal fade" name="modalclientes" id="modalcrearcli" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="/recepcion" method="POST" class="needs-validation" novalidate>
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrar Clientes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Identidad</label>
                        <input type="text" class="form-control" id="dni" name="dni" placeholder="Introducir Identidad"
                            tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            placeholder="Introducir Nombre" tabindex="2" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion"
                            placeholder="Introducir Direccion" tabindex="3" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tel/Cel</label>
                        <input type="number" class="form-control" id="telefono" name="telefono"
                            placeholder="Introducir Celular/Telefono" tabindex="4" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name='submit1' class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
