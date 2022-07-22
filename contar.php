<?php
ini_set ("display_errors", 1);
ini_set("display_startup-errors", 1);
error_reporting(E_ALL);

function contar($aArray){
    $contador= 0;
    foreach ($aArray as $item){
        $contador++;
    }
    return $contador;

}


//Uso 
$aNotas = array (9,8,9.50,6,5,4);
$aPacientes= array ();
$aPacientes[] = array(
    "dni" => "33.775.012",
    "nombre" =>"Ana Acuña",
    "edad" => "45",
    "peso" => "81.50",
);
$aPacientes[] = array(
    "dni" => "22.889.965",
    "nombre" =>"Gonzalo Bustamante",
    "edad" => "66",
    "peso" => "79",
);
$aPacientes[] = array(
    "dni" => "27.987.456",
    "nombre" =>"Lucas Perez",
    "edad" => "40",
    "peso" => "76",
);
$aPacientes[] = array(
    "dni" => "6.908.421",
    "nombre" =>"Ludmila Paz",
    "edad" => "75",
    "peso" => "87",
);
$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000
);
$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000
);
$aProductos[] = array(
    "nombre" => "Aire acondicionado Split inverter Frio/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => 5,
    "precio" => 45000
);

echo "<br>Cantidad de productos:" .contar ($aProductos);
echo "<br>Cantidad de pacientes:" .contar ($aPacientes);
echo "<br>Cantidad de notas:" .contar ($aNotas);