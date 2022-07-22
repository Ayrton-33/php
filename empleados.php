<?php
ini_set ("display_errors", 1);
ini_set("display_startup-errors", 1);
error_reporting(E_ALL);

$aEmpleados= array ();
$aEmpleados[]=array ("dni"=>38987765,"nombre"=>"David Garcia","bruto"=>85000.30);
$aEmpleados[]=array ("dni"=>5894985,"nombre"=>"Ana del Valle","bruto"=>90000);
$aEmpleados[]=array ("dni"=>25678099,"nombre"=>"Andrés Perez","bruto"=>100000);
$aEmpleados[]=array ("dni"=>17345675,"nombre"=>"Victoria Luz","bruto"=>70000);



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Empleados</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Listado de empleados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                <thead>    
                    <tr>
                        <th>Dni</th>
                        <th>Nombre</th>
                        <th>Sueldo</th>
                    </tr>
                </thead>
                <tbody>
                <tbody>
                        <?php foreach ($aEmpleados as $empleado){ ?>
                            <tr>
                                <td><?php echo $empleado ["dni"]; ?></td>
                                <td><?php echo $empleado ["nombre"]; ?></td>
                                <td><?php echo $empleado ["bruto"]; ?></td>
                            </tr>
                            <?php } ?>
                </tbody>
                </div>
            </div>

        </div>

    </main>
    
</body>
</html>