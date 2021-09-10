<html>
    <head>
        <title>Página en Php</title>
    </head>    
    <body>
        <h1>Titulo 1</h1>
        <h2>Hola Mundo 1</h2>
        <?php
        echo "<h1>Hola mundo 2 con php</h1>";
        $numero1 = "cinco";
        echo "<h2>Valor de la variable numero1 = ".$numero1."</h2>";
        $numero2 = 5;
        echo "<h2>Valor de la variable numero1 = ".$numero1."</h2>";
        $numero3 = array("a","b","c","d","e","f","g");
        for($i=0;$i < 5; $i++){
            echo "<h1>$i</h1>";
        }
        
        echo "<h1>";
        for($i=0;$i < count($numero3); $i++){
            echo "$numero3[$i] ";
        }
        echo "</h1>";
        echo "<h1>";
        foreach($numero3 as $item){
           echo $item." ";
        }
        echo "</h1>";
        $cantidad = 1;
        
        while($cantidad < 6){
            echo "<h2>cantidad $cantidad</h2>";
            //$cantidad = $cantidad + 1;
            $cantidad++;
        }
        ?>
    </body>
</html>