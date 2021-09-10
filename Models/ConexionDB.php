<?php

class ConexionDB {

    private $servidorDB = "localhost";
    private $nombreUsuarioSer = "root";
    private $contraseniaSer = "";
    private $baseDatos = "citas";
    private $conexion;
    
    function __construct() {
        $this->conectar();
    }

    private function conectar() {
        // crear conexion
        $this->conexion = new mysqli($this->servidorDB, $this->nombreUsuarioSer, $this->contraseniaSer, $this->baseDatos);
        if ($this->conexion->connect_error) {
            die("Error de conexion... " . $conexion->connect_error);
        }
    }
    
    function query($sql){
       return $registros = mysqli_query($this->conexion, $sql);
    }

}
