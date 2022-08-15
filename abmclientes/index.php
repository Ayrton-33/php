<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
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

    <title>Ambclientes</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-4">
                <h1>Registro de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="" method="post">
                    <div class="my-3">
                        <label for="">Dni:*</label>
                        <input type="number" name="txtDni" id="txtDni" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="">Nombre:*</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="">Teléfono:</label>
                        <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="">Correo:*</label>
                        <input type="email" name="txtCorreo" id="txt" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="">Archivo adjunto:</label>
                        <input type="file" name="archivo1" id="archivo1" accept=".jpg, .jpeg, .png" class="form-control">
                        <small class="d-block">Archivos admitidos: .jpg, .jpeg, .png </small>
                    </div>
                    <div class="my-3">
                        <button class="btn btn-primary"  type="submit">Guardar</button>
                        <a href="index.php" class="btn btn-danger" type="submit">Nuevo</a>
                    </div>
                </form>
            </div>
            <div class="col-6 mt-4">
                <table class="table table-hover border">
                    <thead>
                        <th>Imagen</th>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </thead>
                </table>
            </div>
        </div>

    </main>
    
</body>
</html>