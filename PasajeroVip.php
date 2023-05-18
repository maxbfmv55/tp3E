<?php

include_once('Pasajero.php');

class PasajeroVip extends Pasajero
{
    private $nroViajeFrecuente;
    private $cantMillas;


    public function __construct($nombre, $apellido, $telefono, $numDocumento, $nroAsiento, $nroTicket, $nroViajeFrecuente, $cantMillas)
    {
        parent::__construct($nombre, $apellido, $telefono, $numDocumento, $nroAsiento, $nroTicket);

        $this->nroViajeFrecuente = $nroViajeFrecuente;
        $this->cantMillas = $cantMillas;
    }

    //get y set de Numero de viajes frecuentes
    public function getNroViajeFrecuente()
    {
        return $this->nroViajeFrecuente;
    }

    public function setNroViajeFrecuente($nroViajeFrecuente)
    {
        $this->nroViajeFrecuente = $nroViajeFrecuente;
    }

    //get y set Cantidad de millas
    public function getCantMillas()
    {
        return $this->cantMillas;
    }

    public function setCantMillas($cantMillas)
    {
        $this->cantMillas = $cantMillas;
    }

    public function __toString()
    {
        $cadena = parent::__toString();
        $cadena .= "\nNúmero de viajes frecuentes: {$this->getNroViajeFrecuente()}\n
        Cantidad de millas: {$this->getCantMillas()}\n";
        return $cadena;
    } 

    public function darPorcentajeIncremento()
    {
        $incremento = 1.35;
        $millas = $this->getCantMillas();
        if($millas > 300){
            $millas = $millas*1.30;
            $this->setCantMillas($millas);
            echo $this->getCantMillas();
        }
        return $incremento;
    }        
    
}


