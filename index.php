<!DOCTYPE html>
<html>
    <head>
        <title>Editar Consultorio</title>
        <?php include_once $GLOBALS["UrlWeb"] . "Views/comun/header.php" ?>
    </head>    
    <body>
<!-- https://github.com/jairoespanai/citas-adsi.git -->
        <nav class="navbar navbar-dark bg-dark text-white">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo $GLOBALS["UrlWebHttp"] ?>assets/images/logo.png" alt="" width="50" height="50">
                    Aplicacion Web ADSI    
                </a>

            </div>
        </nav>
        <div class="row mt-4">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="card">
                    <form action="<?php echo $GLOBALS["UrlWebHttp"] ?>Controllers/Proxy.php?c=Consultorios&a=listar" method="POST">
                        <div class="card-header bg-success text-white text-center">Inicio de Sesion</div>
                        <div class="card-body">

                            <label>Usuario</label><br/>
                            <input name="usuario" type="text" required="required"><br/>
                            <label>Contraseña</label><br/>
                            <input name="contrasena" type="password" required="required"><br/><br/>

                        </div>
                        <div class="card-footer text-center"> <input type="submit" value="Ingresar" class="btn btn-primary"> </div>
                    </form> 
                </div> 
            </div>
            <div class="col-lg-4"></div>
        </div>

    </body>
</html>
