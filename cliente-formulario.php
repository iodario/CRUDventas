<?php

include_once "config.php";
include_once "entidades/cliente.php";
include "header.php";

$pg = "edicion de cliente";

$cliente = new Cliente();
$cliente->cargarFormulario($_REQUEST);

if ($_POST) {

    if (isset($_POST["btnGuardar"])) {
        if (isset($_GET["id"]) && $_GET["id"] > 0) {
            //Actualizo un cliente existente
        }
    }
}

?>


<!-- End of Topbar -->

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4">Cliente</h1>
    <div class="row">
        <div class="col-12 mb-3">
            <a href="clientes-listado.php" class="btn btn-primary mr-2">Listado</a>
            <a href="cliente-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
            <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
            <button type="submit" class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</button>
        </div>
    </div>
    <div class="row">
        <div class="col-6 form-group">
            <label for="txtNombre">Nombre:</label>
            <input type="text" required class="form-control" name="txtNombre" id="txtNombre" value="">
        </div>
        <div class="col-6 form-group">
            <label for="txtCuit">CUIT:</label>
            <input type="text" required class="form-control" name="txtCuit" id="txtCuit" value="" maxlength="11">
        </div>
        <div class="col-6 form-group">
            <label for="txtFechaNac">Fecha de nacimiento:</label>
            <input type="date" class="form-control" name="txtFechaNac" id="txtFechaNac" value="">
        </div>
        <div class="col-6 form-group">
            <label for="txtTelefono">Teléfono:</label>
            <input type="number" class="form-control" name="txtTelefono" id="txtTelefono" value="">
        </div>
        <div class="col-6 form-group">
            <label for="txtCorreo">Correo:</label>
            <input type="" class="form-control" name="txtCorreo" id="txtCorreo" required value="">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Domicilios
                    <div class="pull-right">
                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalDomicilio">Agregar</button>
                    </div>
                </div>
                <div class="panel-body">
                    <table id="grilla" class="display" style="width:98%">
                        <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Provincia</th>
                                <th>Localidad</th>
                                <th>Dirección</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modalDomicilio" tabindex="-1" role="dialog" aria-labelledby="modalDomicilioLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDomicilioLabel">Domicilio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="lstTipo">Tipo:</label>
                            <select name="lstTipo" id="lstTipo" class="form-control">
                                <option value="" disabled selected>Seleccionar</option>                               
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="lstProvincia">Provincia:</label>
                            <select name="lstProvincia" id="lstProvincia" onchange="fBuscarLocalidad();" class="form-control">
                                <option value="" disabled selected>Seleccionar</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="lstLocalidad">Localidad:</label>
                            <select name="lstLocalidad" id="lstLocalidad" class="form-control">
                                <option value="" disabled selected>Seleccionar</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="txtDireccion">Dirección:</label>
                            <input type="text" name="" id="txtDireccion" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="fAgregarDomicilio()">Agregar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?php include "footer.php"; ?>