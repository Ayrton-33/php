<?php

use Persona as GlobalPersona;

ini_set("display_errors", 1);
ini_set("display_startup-errors", 1);
error_reporting(E_ALL);

class Persona{

    protected $dni;
    protected $nombre;
    protected $correo;
    protected $celular;

    
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

    public function __construct()
    {
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

    public function setFichaMedica(){

    }
}

class Entrenador extends Persona{
    private $aClases;

    public function __construct()
    {
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

    public function asignarClase(){

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

    public function asignarEntrendor(){

    }

    public function inscribirAlumno(){

    }

    public function imprimirListado(){
        
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
$clase1-> imprimirListado();

$clase2 = new Clase();
$clase2-> nombre= "Zumba";
$clase2-> asignarEntrendor($entrenador2);
$clase2-> inscribirAlumno($alumno1);
$clase2-> inscribirAlumno($alumno2);
$clase2-> inscribirAlumno($alumno3);
$clase2-> imprimirListado();




?>