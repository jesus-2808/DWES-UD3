<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $multiplicando1=3;
    $multiplicando2=7;
    //o echo multiplicacion(3,7)
    
        include "funciones.inc.php";
       include_once "funciones2.inc.php";
       require "funciones2.inc.php";
        $mostrar=multiplicacion($multiplicando1,$multiplicando2);
        echo $mostrar;
        echo "multiplica";
        
    //display error: on, probar en casa
        ?>

</body>
</html>