<?php
ini_set("display_errors", 1);
ini_set("display_startup-errors", 1);
error_reporting(E_ALL);

if ($_POST){
    $nombre = $_POST ["txtNombre"];
    $dni = $_POST ["txtDni"];
    $telefono = $_POST ["txtTelefono"];
    $edad = $_POST ["txtCantidad"];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Resultado</title>
</head>
<body>
<main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Resultado de formulario:</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Dni</th>
                        <th>Teléfono</th>
                        <th>Edad</th>
                    </tr>
                </thead>    
                <tbody>
                    <tr>
                        <td><?php echo $nombre; ?></td>
                        <td><?php echo $dni; ?></td>
                        <td><?php echo $telefono; ?></td>
                        <td><?php echo $edad; ?></td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    
</body>
</html>