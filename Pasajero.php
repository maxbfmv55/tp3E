<?php

class Pasajero
{
    //atributos

    private $nombre;
    private $apellido;
    private $telefono;
    private $numDocumento;
    private $nroAsiento;
    private $nroTicket;

    public function __construct($nombre, $apellido, $telefono, $numDocumento, $nroAsiento, $nroTicket)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
        $this->numDocumento = $numDocumento;
        $this->nroAsiento = $$nroAsiento;
        $this->nroTicket = $nroTicket;
    }

    //get y set de nombre
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;
        return $this;
    }

    //get y set de apellido
    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    //get y set de tipo
    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->$telefono = $telefono;
    }

    //get y set de numero de documento
    public function getNumDocumento()
    {
        return $this->numDocumento;
    }

    public function setNumDocumento($numDocumento)
    {
        $this->numDocumento = $numDocumento;
    }

    public function getNroAsiento()
    {
        return $this->nroAsiento;
    }

    public function setNroAsiento($nroAsiento)
    {
        $this->nroAsiento = $nroAsiento;
    }

    public function getNroTicket()
    {
        return $this->nroTicket;
    }

    public function setNroTicket($nroTicket)
    {
        $this->nroTicket = $nroTicket;
    }

    public function __toString()
    {
        $cadena = "Nombre: {$this->getNombre()} \n
        Apellido: {$this->getApellido()} \n
        Tipo de Documento: {$this->getTelefono()} \n
        N° de Documento: {$this->getNumDocumento()}\n
        Número de Asiento: {$this->getNroAsiento()}\n
        Número de Ticket: {$this->getNroTicket()}\n";
        return $cadena;
    }

    public function darPorcentajeIncremento()
    {
        $incremento = 1.10;
        return $incremento;
    }
    
}
