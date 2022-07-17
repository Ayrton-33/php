<?php

ini_set("display_errors", 1);
ini_set("display_startup-errors", 1);
error_reporting(E_ALL);
date_default_timezone_set("America/Argentina/Buenos_Aires");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock</title>
</head>
<body>
    <?php
    $stock =800;
    if($stock >0){
    echo "Hay stock";
    }else {
        echo "No hay stock";
    }
    ?>

    
</body>
</html>