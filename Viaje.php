<?php
class Viaje
{
    private $codigo;
    private $destino;
    private $CantMaxP;
    private $objResponsable;
    private $pasajeros = array();

    public function __construct($codigo, $destino, $CantMaxP)
    {
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->CantMaxP = $CantMaxP;
    }

    //get y set del codigo del viaje
    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    //get y set del Destino de viaje
    public function getDestino()
    {
        return $this->destino;
    }

    public function setDestino($destino)
    {
        $this->destino = $destino;
    }

    //get y set de la cantidad maxima de pasajeros
    public function getCantMaxP()
    {
        return $this->CantMaxP;
    }

    public function setCantMaxP($CantMaxP)
    {
        $this->CantMaxP = $CantMaxP;
    }

    //get y set del responsable del viaje
    public function getObjResponsable()
    {
        return $this->objResponsable;
    }

    public function setObjResponsable($objPasajeros)
    {
        $this->objResponsable = $objPasajeros;
    }

    //get y set de los pasajeros
    public function getPasajeros()
    {
        return $this->pasajeros;
    }

    public function setPasajeros($objPasajeros)
    {
        $this->pasajeros = $objPasajeros;
    }

    public function verResponsable()
    {
        $mensajeResponsable = "";
        if ($this->objResponsable == null) {
            $mensajeResponsable = "No existe responsable de viaje cargado.\n";
        } else {
            $mensajeResponsable = "Número de empleado: {$this->objResponsable->getNumeroEmpleado} 
            \nNúmero de licencia: {$this->objResponsable->getNumeroLicencia()}
            \nNombre: {$this->objResponsable->getNombreEmpleado()}
            \nApellido: {$this->objResponsable->getApellidoEmpleado()}";
        }
        return $mensajeResponsable;
    }

    public function __toString()
    {
        $str = "Codigo: {$this->getCodigo()} \nDestino: {$this->getDestino()} \nCantidad máxima de pasajeros: {$this->getCantMaxP()} \nResponsable del viaje: {$this->objResponsable} \nLista de pasajeros: \n";
        foreach ($this->pasajeros as $pasajero) {
            $str .= "Nombre: {$pasajero->getNombre()} \nApellido: {$pasajero->getApellido()} \nD.N.I: {$pasajero->getNumDocumento()} \nTelefono: {$pasajero->getTelefono()} \n";
        }
        return $str;
    }

    public function codigoNuevo($nuevo_Codigo)
    {
        $this->setCodigo($nuevo_Codigo);
        return "El codigo nuevo de {$this->getDestino()} es: {$this->getCodigo()}";
    }

    public function agregarPasajero($pasajero)
    {
        $rtaPasajero = false;
        if (count($this->getPasajeros()) < $this->getCantMaxP()) {
            $this->pasajeros[] = $pasajero;
            $rtaPasajero = true;
        } else {
            $rtaPasajero = false;
        }
        return $rtaPasajero;
    }

    public function modificarDestino($destino)
    {
        $this->setDestino($destino);
        return "Destino moficado exitosamente";
    }

    public function modificarMaxPasajeros($CantMaxP)
    {
        $this->setCantMaxP($CantMaxP);
        return "cantidad de pasajeros modificado exitosamente";
    }

    public function modificarPasajero($documento, $nuevoNombre, $nuevoApellido, $nuevoTelefono)
    {
        $varModPasajero = $this->getPasajeros();
        foreach ($varModPasajero as $pasajero) {
            if ($pasajero->getDocumento() == $documento) {
                $pasajero->setNombre($nuevoNombre);
                $pasajero->setApellido($nuevoApellido);
                $pasajero->setTelefono($nuevoTelefono);
                $rtaModificar = true;
            } else {
                $rtaModificar = false;
            }
        }
        return $rtaModificar;
    }

    public function eliminarPasajero($documento)
    {
        $rtaEliminar = false;
        $array = $this->getPasajeros();
        foreach ($array as $index => $pasajero) {
            if ($this->verificaExistencia($documento)) {
                array_splice($array, $index, 1);
                $this->setPasajeros($array);
                $rtaEliminar = true;
            } else {
                $rtaEliminar = false;
            }
        }
        return $rtaEliminar;
    }

    public function agregarResponsable($objResponsableViaje)
    {
        if ($this->objResponsable && $this->objResponsable->getNumeroEmpleado() == $objResponsableViaje->getNumeroEmpleado()) {
            $rta = false;
        } else {
            $this->objResponsable = $objResponsableViaje;
            $rta = true;
        }
        return $rta;
    }

    public function verificaExistencia($documento)
    {
        $duplicado = false;
        $arrayExistencia = $this->getPasajeros();
        $cantidadPasajeros = count($arrayExistencia);
        $i = 0;
        while ($i < $cantidadPasajeros && !($duplicado)) {
            if ($this->$arrayExistencia->getNumDocumento() == $documento) {
                $duplicado = true;
            }
            $i++;
        }
        return $duplicado;
    }
}

