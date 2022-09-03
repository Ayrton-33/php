<?php

ini_set("display_errors", 1);
ini_set("display_startup-errors", 1);
error_reporting(E_ALL);

class Persona{

    protected $dni;
    protected $nombre;
    protected $correo;
    protected $celular;

    public function __construct($dni, $nombre, $correo, $celular) {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->celular = $celular;
    }
    
    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this-> $name;
    }

    
}

class Alumno extends Persona{
    private $fechaNac;
    private $peso;
    private $altura;
    private $aptoFisico;
    private $presentismo;

    public function __construct($dni, $nombre, $correo, $celular, $fechaNac)
    {   parent::__construct($dni, $nombre, $correo, $celular);
        $this->fechaNac = $fechaNac;
        $this->peso= 0.0;
        $this->altura= 0.0;
        $this->aptoFisico= false;
        $this->presentismo= 0.0;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this-> $name;
    }

    public function setFichaMedica($peso, $altura, $aptoFisico){
        $this->peso = $peso;
        $this->altura = $altura;
        $this->aptoFisico = $aptoFisico; 
    }
}

class Entrenador extends Persona{
    private $aClases;

    public function __construct($dni, $nombre, $correo, $celular)
    {   parent::__construct($dni, $nombre, $correo, $celular);//este es el constructor de la clase persona
        $this->aClases= array();
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this-> $name;
    }

    public function asignarClase($clase){
        $this->aClases[]= $clase;
    }
}

class Clase{
    private $nombre;
    private $entrenador;
    private $aAlumnos;

    public function __construct()
    {
        $this->aAlumnos= array();
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this-> $name;
    }

    public function asignarEntrendor($entrenador){
        $this-> entrenador= $entrenador;
    }

    public function inscribirAlumno($alumno){
        $this->aAlumnos[] = $alumno;
    }

    public function imprimirListado(){
        
        echo "<table class='table table-bordered table-hover'>"; 
        echo "<tr><th colspan='4' class='text-center table-dark'>Clase: " . $this->nombre . "</th></tr>";
        echo "<tr><th colspan='2'>Entrenador:</th><td colspan='2'>" . $this->entrenador->nombre . "</td></tr>";
        echo "<tr><th colspan='4'>Alumnos inscriptos:</th></tr>";
        echo "<tr><th>DNI</th><th>Nombre</th><th>Correo</th><th>Celular</th>";
        foreach($this->aAlumnos as $alumno){
            echo "<tr><td>" . number_format($alumno->dni,0,",",".") . "</td><td>" . $alumno->nombre ."</td><td>" . $alumno->correo . "</td><td>" . $alumno->celular . "</th></tr>";
        }
        echo "</table>";
    }
}

//Desarrollo del programa

$entrenador1 = new Entrenador("38490878","Miguel Ocampo","miguel@mail.com","11980334");
$entrenador2 = new Entrenador("32987907", "Andrea Zarate","andre@mail.con","11346987");

$alumno1 = new Alumno("476868687","Dante Moratea","dante@mail.com","11876987","1197-08-28");
$alumno1-> setFichaMedica(90,178,true);
$alumno1-> presentismo= 79;

$alumno2 = new Alumno("45657676","Dario Turchi","dario@mail.com","11786090","1986-11-21");
$alumno2-> setFichaMedica(73,168,false);
$alumno2-> presentismo= 69;

$alumno3 = new Alumno("41750926","Jazmin Acevedo","jazmin@mail.com","11876543","1999-05-31");
$alumno3-> setFichaMedica(60,155,true);
$alumno3-> presentismo= 89;

$alumno4 = new Alumno("44654654","Bianca Acevedo","bianca@mail.com","11766589","2007-03-04");
$alumno4-> setFichaMedica(62,165,false);
$alumno4-> presentismo= 99;

$clase1 = new Clase();
$clase1-> nombre= "Funcional";
$clase1-> asignarEntrendor($entrenador1);
$clase1-> inscribirAlumno($alumno1);
$clase1-> inscribirAlumno($alumno2);
$clase1-> inscribirAlumno($alumno4);
//$clase1-> imprimirListado();

$clase2 = new Clase();
$clase2-> nombre= "Zumba";
$clase2-> asignarEntrendor($entrenador2);
$clase2-> inscribirAlumno($alumno1);
$clase2-> inscribirAlumno($alumno2);
$clase2-> inscribirAlumno($alumno3);
//$clase2-> imprimirListado();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Gimnasio</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Gimnasio:</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 py-5">
                <?php $clase1-> imprimirListado(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 py-5">
                <?php $clase2-> imprimirListado(); ?>
            </div>
        </div>
    </main>
</body>
</html>