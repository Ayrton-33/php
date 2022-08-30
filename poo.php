<?php
ini_set("display_errors", 1);
ini_set("display_startup-errors", 1);
error_reporting(E_ALL);

class Persona{
    public $dni;
    public $edad;
    public $nombre;
    public $nacionalidad;
    public function imprimir(){}
}

class Alumno extends Persona{
    public $legajo;
    public $notaPortfolio;
    public $notaPhp;
    public $notaProyecto;

    public function __construct(){
        $this-> notaPortfolio = 0.0;
        $this-> notahp = 0.0;
        $this-> notaProyecto = 0.0;
    }
   
    public function imprimir(){
        echo "Alumno:  " . $this->nombre . "<br>";
        echo "Documento:  " . $this->dni . "<br>";
        echo "Nota PHP:  " . $this->notaPhp . "<br><br>";
        echo "Nota Portfolio:  " . $this->notaPortfolio . "<br><br>";
        echo "Nota Proyecto:  " . $this->notaProyecto . "<br><br>";
    }
    public function calcularPromedio()
    {}
}

class Docente extends Persona{
    public $especialidad;
    public function imprimir(){}
    public function imprimirEspecialidadesHabilitadas(){}
}

//Programa
$alumno1 = new Alumno();
$alumno1-> notaPortfolio= 8;
$alumno1-> notaPhp= 6;
$alumno1-> notaProyecto= 9;
$alumno1-> nombre= "Ayrton";
$alumno1-> dni= "37.640.860";
$alumno1-> imprimir();



?>