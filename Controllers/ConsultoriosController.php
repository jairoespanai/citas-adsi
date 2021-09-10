<?php
// nombre_aprendiz_ficha
// AP5, AP6 y AP7
// Fin entrega 30 agosto
// jairo.espana@misena.edu.co
// portada (nombres de los aprendices que trabajaron la evidencia)
class ConsultoriosController {
    private $facade;
    
    function __construct() {
        $this->facade = new ConsultoriosFacade();
    }
    
    function getConsultoriosAll(){
        return $this->facade->getConsultoriosAll();
    }
    
    function insertarConsultorio($entity){
        $this->facade->insertaConsultorio($entity);
    }
    
    function getConsultorioById($id){
        return $this->facade->getConsultorioById($id)->fetch_object();
    } 
    
    function actualizarConsultorio($entity){
        $this->facade->actualizarConsultorio($entity);
    }
    
    function deleteConsultorioById($id){
        $this->facade->eliminarConsultorio($id);        
    }
}
