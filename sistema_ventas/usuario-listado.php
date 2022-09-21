<?php 

include_once("config.php");
include_once("header.php");

?>
<div class="container">
    <div class="row">
        <div class="col-12 pt-4">
            <h1>Listado de usuarios</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-4">
            <a href="producto-formulario.php" class="btn btn-primary mr-2">Nuevo</a> 
        </div>
    </div>
    <div class="row">
            <div class="col-12 mt-4">
                 <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                 </table>    
            </div>
    </div>
</div>    