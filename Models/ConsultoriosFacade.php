<?php
/**
 * Description of ConsultoriosFacade
 *
 * @author jairo.espana
 */
class ConsultoriosFacade {
    //put your code here
     private $conex;
    
    function __construct() {
        $this->conex = new ConexionDB();
    }
    
    function getConsultoriosAll(){
        return $this->conex->query("select * from consultorios");
    }
    
    function insertaConsultorio($entity){
        $numero = $entity->getConNumero();
        $nombre = $entity->getConNombre();
        $this->conex->query("insert into consultorios (conNumero, conNombre) values ($numero,'$nombre') ");
    }
    
    function actualizarConsultorio($entity){
        $numero = $entity->getConNumero();
        $nombre = $entity->getConNombre();
        $this->conex->query("update consultorios set conNombre = '$nombre' where conNumero = $numero");
    }
    
    function getConsultorioById($id){
        return $this->conex->query("select * from consultorios where conNumero = $id");
    }
    
    function eliminarConsultorio($id){
        $this->conex->query("delete from consultorios where conNumero = $id");
    }
}
