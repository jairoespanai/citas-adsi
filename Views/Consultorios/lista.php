<?php
/* $lista = array(
  array("001", "Juan Perez"),
  array("002", "Calos Mendez"),
  array("003", "Manuela Gomez")
  ); */


$consultorios = new ConsultoriosController();
$registros = $consultorios->getConsultoriosAll();
?>

<html>
    <head>
        <title>Lista de Consultorios</title>
        <?php include_once $GLOBALS["UrlWeb"] . "Views/comun/header.php" ?>
    </head>
    <body>
        <?php include_once $GLOBALS["UrlWeb"] . "Views/comun/nav-enfermero.php" ?>
        <div class="row">
            <div class="col-lg-3 col-12 "></div>
            <div class="col-lg-6 col-12 ">
                <table class="table">
                <tr><th>Codigo Consultorio</th><th>Nombre Consultorio</th><th colspan="2">Opciones</th></tr>
                <?php
                if ($registros) {
                    //foreach($lista as $item)
                    while ($item = $registros->fetch_object()) {
                        echo "<tr><td>$item->ConNumero</td><td>$item->ConNombre</td><td><a href='" . $GLOBALS["UrlWebHttp"] . "Controllers/Proxy.php?c=Consultorios&a=editar&id=$item->ConNumero' class='btn btn-success'>Editar</a></td><td><a href='" . $GLOBALS["UrlWebHttp"] . "Controllers/Proxy.php?c=Consultorios&a=eliminar&id=$item->ConNumero' class='btn btn-danger'>Eliminar</a></td></tr>";
                    }
                }
                ?>
            </table>
            </div>
            <div class="col-lg-3 col-12 "></div>
            
        </div>
    </body>
</html>
