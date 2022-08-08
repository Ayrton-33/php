<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definicion
function print_f($variable){
    if(is_array($variable)){
        $archivo= fopen("datos.txt", "a+");
        //Si es un array, lo recorro y guardo el contenido en el archivo "datos.txt"
        
        fwrite($archivo, "Datos del array ==>");

        foreach ($variable as $item){
            fwrite($archivo,$item);
        }
        fclose($archivo);

    } else{
        //Entonces es string, guardo el contenido en el archivo "datos.txt"
        $contenido = "Datos de la variable ==>" . $variable;

        file_put_contents("datos.txt", $contenido);
    }
    echo "archivo generado.";

}

//Uso
$aNotas=array(6,4,8,9,2);
$msg="Este es un mensaje";
print_f($aNotas);

?>