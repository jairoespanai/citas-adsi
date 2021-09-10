<!-- 
        C = Create = Insertar = Insert Into
        R = Read = Consultar = Select * From
        U = Update = Actualizar = Update SET
        D = Delete = Eliminar = Delete From
-->
<html>
    <head>
        <title>Crear Consultorio</title>
        <?php include_once $GLOBALS["UrlWeb"] . "Views/comun/header.php" ?>
    </head>    
    <body>
        <?php include_once $GLOBALS["UrlWeb"] . "Views/comun/nav-enfermero.php" ?>
        <div class="row mt-4">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="card">

                    <form action="<?php echo $GLOBALS["UrlWebHttp"] ?>Controllers/Proxy.php?c=Consultorios&a=insertar" method="POST">
                        <div class="card-header bg-success text-white text-center">Crear Consultorio</div>
                        <div class="card-body">
                            <label>Número del Consultorio</label><br/>
                            <input name="conNumero" type="text" required="required"><br/>
                            <label>Nombre del Consultorio</label><br/>
                            <input name="conNombre" type="text" required="required"><br/><br/>


                        </div>
                        <div class="card-footer text-center"> <input type="submit" value="Crear Consultorio" class="btn btn-primary"> </div>
                    </form> 
                </div> 
            </div>
            <div class="col-lg-4"></div>
        </div>
    </body>
</html>

