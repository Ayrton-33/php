<?php

ini_set("display_errors", 1);
ini_set("display_startup-errors", 1);
error_reporting(E_ALL);

//Preguntar si existe el archivo
    if(file_exists("archivo.txt")){

     //Vamos a leerlo y almacenar su contenido en jsonClientes
        $jsonClientes=file_get_contents("archivo.txt");
    //Convertir jsonClientes en un array llamado aClientes
        $aClientes=json_decode($jsonClientes,true);
    }else{
//Si no existe el archivo
    //Creamos un aClientes inicializado como un array vacio
        $aClientes=array();
    }
if($_POST){
    $dni=trim($_POST["txtDni"]);
    $nombre=trim($_POST["txtNombre"]);
    $telefono=trim($_POST["txtTelefono"]);
    $correo=trim($_POST["txtCorreo"]);

    $aClientes[] = array("dni" =>$dni,
                        "nombre" =>$nombre,
                        "telefono" =>$telefono,
                        "correo" =>$correo);
 
    //Convertir el array de clientes a jsonClientes
        $jsonClientes= json_encode($aClientes);

    //Almacenar jsonClientes en el archivo.txt
        file_put_contents("archivo.txt", $jsonClientes);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="my-3">
                        <label for="">Dni:*</label>
                        <input type="number" name="txtDni" id="txtDni" class="form-control" required placeholder="Ingrese su DNI">
                    </div>
                    <div class="my-3">
                        <label for="">Nombre:*</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control" required placeholder="Nombre y Apellido">
                    </div>
                    <div class="my-3">
                        <label for="">Teléfono:</label>
                        <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control" placeholder="Teléfono">
                    </div>
                    <div class="my-3">
                        <label for="">Correo:*</label>
                        <input type="email" name="txtCorreo" id="txt" class="form-control" required placeholder="Correo">
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
                <table class="table table-hover border shadow">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>    
                    </thead>
                    <tbody>
                        <?php foreach ($aClientes as $cliente): ?>
                        <tr>
                            <td></td>
                            <td><?php echo $cliente["dni"];  ?></td>
                            <td><?php echo $cliente["nombre"];  ?></td>
                            <td><?php echo $cliente["correo"];  ?></td>
                            <td>
                                <a href=""></a><i class="bi bi-pencil-fill"></i>
                                <a href=""></a><i class="bi bi-trash-fill"></i>
                            </td>
                            
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </main>
    
</body>
</html>