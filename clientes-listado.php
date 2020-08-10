<?php
include "header.php";
?>


<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Listado de clientes</h1>
    </div>

    <div class="row">
        <div class="col-12 mb-3">
            <a href="cliente-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
        </div>

        <table class="table table-hover border">
            <tr>
                <th>CUIT</th>
                <th>Nombre</th>
                <th>Fecha nac.</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Domicilios</th>
                <th>Acciones</th>
            </tr>
        </table>
    </div>




</div>


<?php include "footer.php"; ?>