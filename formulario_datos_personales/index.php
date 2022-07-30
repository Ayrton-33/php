<?php
ini_set("display_errors", 1);
ini_set("display_startup-errors", 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Formulario de datos personales</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Formulario de datos personales:</h1>
            </div>
        </div>
    
    <div class="row">
        <div class="col-12">
            <form action="resultado.php" method="post">
                <div class="my-3">
                    <label for="">Nombre:*</label>
                     <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                </div>
                <div class="my-3">
                    <label for="">DNI:*</label>
                     <input type="number" name="txtDni" id="txtDni" class="form-control">
                </div>
                <div class="my-3">
                    <label for="">Teléfono:*</label> 
                    <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control">
                </div>
                <div class="my-3">
                    <label for="">Edad:*</label> 
                    <input type="number" name="txtCantidad" id="txtCantidad" class="form-control">
                </div>
                <div class="my-3 text-end">
                    <button class="btn btn-primary" type="submit">ENVIAR</button>
                </div>
        </div>
    </div>

    </main>
</body>
</html>