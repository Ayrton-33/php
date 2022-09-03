<?php

use Persona as GlobalPersona;

ini_set("display_errors", 1);
ini_set("display_startup-errors", 1);
error_reporting(E_ALL);

date_default_timezone_set('America/Argentina/Buenos_Aires');

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

class Cliente extends Persona{
    private $aTarjetas;
    private $bActivo;
    private $fechaAlta;
    private $fechaBaja;

    public function __construct()
    {
        $this-> aTarjetas= array();
        $this-> bActivo= true;
        $this-> fechaAlta = "Hoy";
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this-> $name;
    }

    public function agregarTarjeta($tarjeta){
        $this->aTarjetas[] = $tarjeta;
    }

    public function darDeBaja($fecha){
        $this->fechaBaja = date_format(date_create($fecha), "d/m/Y");
        $this->bActivo = false; //Baja lógica
    }

    public function imprimir(){}

}

class Tarjeta{
    private $nombreTitular;
    private $numero;
    private $fechaEmision;
    private $fechaVto;
    private $tipo;
    private $cvv;

    public function __construct($numero,$fechaEmision,$fechaVto,$cvv)
    {
        $this->numero = $numero;
        $this->fechaEmision = $fechaEmision;
        $this->fechaVto = $fechaVto;
        $this->cvv = $cvv;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this-> $name;
    }

    const TARJETA_V = "Visa";
    const TARJETA_M = "Mastercard";
    const TARJETA_A = "Amex";
    const TARJETA_N = "Naranja";
    const TARJETA_C = "Cabal";

}

//Desarrollo del programa

$cliente1 = new Cliente();
$cliente1->dni = "37640860";
$cliente1->nombre = "Ayrton Acevedo";
$cliente1->correo = "ayrton@mail.com";
$cliente1->celular = "3512131135";
 
$tarjeta1 = new Tarjeta(Tarjeta::TARJETA_V, "4481630085477804", "11/2027", "12/2028", "834");
$tarjeta2 = new Tarjeta(Tarjeta::TARJETA_A, "374610312783332", "01/2027", "01/2028", "862");
$tarjeta3 = new Tarjeta(Tarjeta::TARJETA_M, "5407623883617802", "08/2025", "08/2026", "973");
$cliente1->agregarTarjeta($tarjeta1);
$cliente1->agregarTarjeta($tarjeta2);
$cliente1->agregarTarjeta($tarjeta3);

$cliente2 = new Cliente();
$cliente2->dni = "37698098";
$cliente2->nombre = "Miguel Ito";
$cliente2->correo = "miguel@mail.com";
$cliente2->celular = "351278686";
$cliente2->agregarTarjeta(new Tarjeta(Tarjeta::TARJETA_V,"4432157371050426", "03/2024", "03/2025", "865"));
$cliente2->agregarTarjeta(new Tarjeta(Tarjeta::TARJETA_M,"5580928570147339", "07/2024", "07/2025", "547"));







?>