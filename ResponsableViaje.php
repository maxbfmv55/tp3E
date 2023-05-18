<?php 

class ResponsableViaje
{

    private $numeroEmpleado;
    private $numeroLicencia;
    private $nombreEmpleado;
    private $apellidoEmpleado;

    public function __construct($numeroEmpleado, $numeroLicencia, $nombreEmpleado, $apellidoEmpleado)
    {   
        $this->numeroEmpleado = $numeroEmpleado;
        $this->numeroLicencia = $numeroLicencia;
        $this->nombreEmpleado = $nombreEmpleado;
        $this->apellidoEmpleado = $apellidoEmpleado;  
    }

    //get y set de el numero de empleado
    public function getNumeroEmpleado()
    {
        return $this->numeroEmpleado;
    }

    public function setNumeroEmpleado($numeroEmpleado)
    {
        $this->numeroEmpleado = $numeroEmpleado;
    }

    //get y st del numero de licencia del empleado
    public function getNumeroLicencia()
    {
        return $this->numeroLicencia;
    }

    public function setNumeroLicencia($numeroLicencia)
    {
        $this->numeroLicencia = $numeroLicencia;
    }

    //get y set del nombre del empleado
    public function getNombreEmpleado()
    {
        return $this->nombreEmpleado;
    }

    public function setNombreEmpleado($nombreEmpleado)
    {
        $this->nombreEmpleado = $nombreEmpleado;
    }

    //get y set apellido del empleado
    public function getApellidoEmpleado()
    {
        return $this->apellidoEmpleado;
    }

    public function setApellidoEmpleado($apellidoEmpleado)
    {
        $this->apellidoEmpleado = $apellidoEmpleado;
    }

    public function __toString()
    {
        return "Número de empleado: {$this->getNumeroEmpleado()} 
        \nNúmero de licencia: {$this->getNumeroLicencia()} 
        \nNombre: {$this->getNombreEmpleado()} 
        \nApellido: {$this->getApellidoEmpleado()}\n";
    }
}