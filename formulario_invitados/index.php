<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Si existe el archivo invitados, lo abrimos y lo cargamos en una variable del tipo array.
    if(file_exists("invitados.txt")){
        $archivo=fopen("invitados.txt", "r");
        $aInvitados=fgetcsv($archivo, 0 , ",");
    }else{
        //Sino el array queda como un array vacio.
        $aInvitados=array();
    }

    if($_POST){
        
        if(isset($_POST["btnDocumento"])){
            $documento= $_REQUEST["txtDocumento"];

            //Si el DNI ingresado se encuentra en la lista de invitados, se mostrara un mensaje de bienvenida
            if(in_array($documento,$aInvitados)){
                $mensaje= "Bienvenido.";

            }else{   
            //Sino un mensaje donde diga: No se encuentra en la lista de invitados
                $mensaje= "No se encuentra en la lista de invitados";
            }
        }
            
        if(isset($_POST["btnCodigo"])){

            $pregunta= $_REQUEST["txtPregunta"];  
            //Si el código es verde, entonces mostrara, su código de acceso es...
            if($pregunta=="verde"){
                $mensaje= "Su código de acceso es" ."\n" .":" ."\n"  . rand(1000,9999);

            }else{
            //Sino, Ud. no tiene pase VIP.
                $mensaje= "Ud. no tiene pase VIP";
            }
        }    
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
    <title>Listado de invitados</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-4">
                <h1>Listado de invitados</h1>
            </div>
            <?php if (isset($mensaje)): ?>
            <div class="col-12">
                <div class="alert alert-info" role="alert">
                <?php echo $mensaje; ?>
                </div>
            </div>
        </div>
        <?php endif;?>
        </div>
        <div class="row">
            <div class="col-12 py-2">
                <p>Complete el siguiente formulario:</p>
            </div>
        </div>
        <div class="row">
            <div>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-12 pb-3">
                            <p>Ingrese su DNI:</p>
                            <input type="text" name="txtDocumento"  class="form-control">
                            <input type="submit" name="btnDocumento" value="Verificar invitado" class="btn btn-primary"></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 pt-3">
                            <p>Ingresa el código secreto para el pase VIP:</p>
                            <input type="text" name="txtPregunta"  class="form-control">
                            <input type="submit" name="btnCodigo" value="Verificar código" class="btn btn-primary"></input>
                        </div>
                    </div>    
                </form>
            </div>
        </div>
    </main>   
</body>
</html>