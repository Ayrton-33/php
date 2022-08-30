<?php
ini_set("display_errors", 1);
ini_set("display_startup-errors", 1);
error_reporting(E_ALL);

class Persona{
    protected $dni;
    protected $edad;
    protected $nombre;
    protected $nacionalidad;
    public function imprimir(){}

    public function __destruct()
    {
        echo "Destruyendo el objeto" . $this->nombre . "<br>";
    }

    public function setDni($dni){$this->dni = $dni;}
    public function getDni(){return $this->dni;}

    public function setEdad($edad){$this->edad = $edad;}
    public function getEdad(){return $this->edad;}

    public function setNombre($nombre){$this->nombre = $nombre;}
    public function getNombre(){return $this->nombre;}

    public function setNacionalidad($nacionalidad){$this->nacionalidad = $nacionalidad;}
    public function getNacionalidad(){return $this->nacionalidad;}
}

class Alumno extends Persona{
    private $legajo;
    private $notaPortfolio;
    private $notaPhp;
    private $notaProyecto;

    public function __construct(){
        $this-> notaPortfolio = 0.0;
        $this-> notahp = 0.0;
        $this-> notaProyecto = 0.0;
    }
   
    public function __destruct()
    {
        echo "Destruyendo el objeto" . $this->nombre . "<br>";
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this-> $name;
    }

    public function imprimir(){
        echo "Nombre:  " . $this->nombre . "<br>";
        echo "Documento:  " . $this->dni . "<br>";
        echo "Nota PHP:  " . $this->notaPhp . "<br><br>";
        echo "Nota Portfolio:  " . $this->notaPortfolio . "<br><br>";
        echo "Nota Proyecto:  " . $this->notaProyecto . "<br><br>";
        echo "Promedio:" . number_format($this->calcularPromedio(),2,",",".") . "<br><br>";
    }
    public function calcularPromedio()
    {
        return ($this->notaPhp + $this->notaPortfolio + $this->notaProyecto)/3;
    }
}

class Docente extends Persona{
    private $especialidad;
    
    public function __construct($dni, $nombre, $especialidad){
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->especialidad = $especialidad;
    }

    public function __destruct()
    {
        echo "Destruyendo el objeto" . $this->nombre . "<br>";
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this-> $name;
    }

    const ESPECIALIDAD_WP= "Wordpress";
    const ESPECIALIDAD_ECO= "Economía aplicada";
    const ESPECIALIDAD_BBDD= "Base de datos";

    public function imprimir(){
        echo "DNI: " . $this->dni . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Nacionalidad: " . $this->nacionalidad . "<br>";
        echo "Especialidad: " . $this->especialidad . "<br>";
    }
    public function imprimirEspecialidadesHabilitadas(){
        echo "Un docente puede tener las siguientes especialidades: <br><br>";
        echo "Especialidad número 1:" . self::ESPECIALIDAD_WP . "<br><br>";
        echo "Especialidad número 2:" . self::ESPECIALIDAD_ECO . "<br><br>";
        echo "Especialidad número 3:" . self::ESPECIALIDAD_BBDD . "<br><br>";
    }

}

//Programa
$alumno1 = new Alumno();
$alumno1-> notaPortfolio= 8;
$alumno1-> notaPhp= 6;
$alumno1-> notaProyecto= 9;
$alumno1-> setNombre ("Ayrton");
$alumno1-> setDni ("37.640.860");
echo "El nombre es " . $alumno1->getNombre();
$alumno1-> imprimir();

$docente1 = new Docente("21987765", "Miguel Perez", Docente::ESPECIALIDAD_BBDD);
$docente1-> imprimir();
$docente1-> imprimirEspecialidadesHabilitadas();


?>