<?php
//$_POST, $_GET, $_REQUEST
//echo "<br>";
//print_r($_POST);
//echo "<br>";
//print_r($_GET);
$GLOBALS["UrlWeb"] = "C:/xampp/htdocs/citas/";
$GLOBALS["UrlWebHttp"] = "http://localhost/citas/";

include_once $GLOBALS["UrlWeb"].'Models/ConexionDB.php';
include_once $GLOBALS["UrlWeb"].'Models/ConsultoriosEntity.php';
include_once $GLOBALS["UrlWeb"].'Models/ConsultoriosFacade.php';
include_once $GLOBALS["UrlWeb"].'Controllers/ConsultoriosController.php';


if (@$_GET["c"] == "Consultorios"){
    if ($_GET["a"] == "insertar"){
        //$numero = $_POST["conNumero"];
        //$nombre = $_POST["conNombre"];
        $consultoriosC = new ConsultoriosController();
        $entity = new ConsultoriosEntity();
        $entity->setConNumero($_POST["conNumero"]);
        $entity->setConNombre($_POST["conNombre"]);
        $consultoriosC->insertarConsultorio($entity);
        include $GLOBALS["UrlWeb"]."Views/Consultorios/lista.php";
    }
    if ($_GET["a"] == "listar"){
        include $GLOBALS["UrlWeb"]."Views/Consultorios/lista.php";
    }
    if ($_GET["a"] == "actualizar"){
        $consultoriosC = new ConsultoriosController();
        $entity = new ConsultoriosEntity();
        $entity->setConNumero($_POST["conNumero"]);
        $entity->setConNombre($_POST["conNombre"]);
        $consultoriosC->actualizarConsultorio($entity);
        include $GLOBALS["UrlWeb"]."Views/Consultorios/lista.php";
    }
    if ($_GET["a"] == "nuevo"){
        include $GLOBALS["UrlWeb"]."Views/Consultorios/nuevo.php";
    }
    if ($_GET["a"] == "eliminar"){
        $id = $_GET["id"];
        $consultoriosC = new ConsultoriosController();
        $entity = $consultoriosC->deleteConsultorioById($id);
        include $GLOBALS["UrlWeb"]."Views/Consultorios/lista.php";
    }
    if ($_GET["a"] == "editar"){
        $id = $_GET["id"];
        $consultoriosC = new ConsultoriosController();
        $entity = $consultoriosC->getConsultorioById($id);
        include $GLOBALS["UrlWeb"]."Views/Consultorios/editar.php";
    }
}

if(!isset($_GET["c"])){
    include $GLOBALS["UrlWeb"]."index.php";
}




