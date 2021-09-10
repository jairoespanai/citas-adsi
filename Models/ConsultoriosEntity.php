<?php

class ConsultoriosEntity {
    private $conNumero;
    private $conNombre;
    
    public function __construct() {
        $this->conNumero=NULL;
        $this->conNombre=NULL;
    }
    
    public function getConNumero() {
        return $this->conNumero;
    }

    public function getConNombre() {
        return $this->conNombre;
    }

    public function setConNumero($conNumero) {
        $this->conNumero = $conNumero;
    }

    public function setConNombre($conNombre) {
        $this->conNombre = $conNombre;
    }


}
