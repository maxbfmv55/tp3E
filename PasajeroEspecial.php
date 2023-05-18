<?php

include_once('Pasajero.php');

class PasajeroEspecial extends Pasajero
{
    private $sillaRuedas;
    private $asistenciaParaEoD;
    private $comidaEspeciales;

    public function __construct($nombre, $apellido, $telefono, $numDocumento, $nroAsiento, $nroTicket, $sillaRuedas, $asistenciaParaEoD, $comidaEspeciales)
    {
        parent::__construct($nombre, $apellido, $telefono, $numDocumento, $nroAsiento, $nroTicket);

        $this->sillaRuedas = $sillaRuedas;
        $this->asistenciaParaEoD = $asistenciaParaEoD;
        $this->comidaEspeciales = $comidaEspeciales;
    }

    //get y set para sillas de ruedas
    public function getSillaRuedas()
    {
        return $this->sillaRuedas;
    }

    public function setSillaRuedas($sillaRuedas)
    {
        $this->sillaRuedas = $sillaRuedas;
    }

    //get y set para asistencia de embarque
    public function getAsistenciaParaEoD()
    {
        return $this->asistenciaParaEoD;
    }

    public function setAsistenciaParaEoD($asistenciaParaEoD)
    {
        $this->asistenciaParaEoD = $asistenciaParaEoD;
    }

    //get y set para comidas especiales
    public function getComidaEspeciales()
    {
        return $this->comidaEspeciales;
    }

    public function setComidaEspeciales($comidaEspeciales)
    {
        $this->comidaEspeciales = $comidaEspeciales;
    }

    public function __toString()
    {
        $cadena = parent::__toString();
        $cadena = "\nUsa silla de rueda: {$this->getSillaRuedas()}\n
        Usa asistencia para embarque: {$this->getAsistenciaParaEoD()}\n
        Necesita comida especial: {$this->getComidaEspeciales()}";
        return $cadena;
    }

    public function darPorcentajeIncremento(){
        $silla = $this->getSillaRuedas();
        $asistencia = $this->getAsistenciaParaEoD();
        $comida = $this->getComidaEspeciales();
        if ($silla && $asistencia && $comida) {
            $incrememto = 1.30;
        }elseif($silla||$asistencia||$comida){
            $incrememto = 1.15;
        }
        return $incrememto;
}

}
