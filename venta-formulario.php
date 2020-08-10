<?php include "header.php"; ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Venta</h1>
    <div class="row">
        <div class="col-12 mb-3">
            <a href="productos-listado.php" class="btn btn-primary mr-2">Listado</a>
            <a href="producto-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
            <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
            <button type="submit" class="btn btn-danger" id="btnNuevo" name="btnNuevo">Borrar</button>
        </div>
    </div>
    <div class="row">
        <div class="col-6 form-group">
            <label for="txtFecha">Fecha:</label>
            <input type="date" required="" class="form-control" name="txtFecha" id="txtFecha" value="">
        </div>
        <div class="col-6 form-group">
            <label for="txtFecha">Hora:</label>
            <input type="time" required="" class="form-control" name="txtHora" id="txtHora" value="">
        </div> 

        <div class="col-6 form-group">
            <label for="lstCliente">Cliente:</label>
            <input type="number" required="" class="form-control" name="txtCantidad" id="txtCantidad" value="">
        </div>
        <div class="col-6 form-group">
            <label for="txtPrecio">Producto:</label>
            <input type="text" class="form-control" name="txtPrecio" id="txtPrecio" value="0">
        </div>
        <div class="col-6 form-group">
            <label for="txtPrecio">Precio Unitario:</label>
            <input type="text" class="form-control" name="txtPrecio" id="txtPrecio" value="0">
        </div>
        <div class="col-6 form-group">
            <label for="txtPrecio">Cantidad:</label>
            <input type="text" class="form-control" name="txtPrecio" id="txtPrecio" value="0">
        </div>
        <div class="col-6 form-group">
            <label for="txtPrecio">Total:</label>
            <input type="text" class="form-control" name="txtPrecio" id="txtPrecio" value="0">
        </div>
    </div>
   

</div>
<!-- /.container-fluid -->



</div>
<!-- End of Main Content -->

<?php include"footer.php"; ?>