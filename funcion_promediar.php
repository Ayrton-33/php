<?php
//Definicion
function promediar($aNumeros){
    $suma= 0;
    foreach ($aNumeros as $numero) {
        $suma= $suma + $numero;
    }
        return $suma/count($aNumeros);
}


//Uso
$aNotas = array (8,4,5,3,9,1);
echo "El promedio es:" . promediar ($aNotas) . "<br>";
