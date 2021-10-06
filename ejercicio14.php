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
    $Meses=[];
    $Meses[]="Enero";
    $Meses[]="Febrero";
    $Meses[]="Marzo";
    var_dump($Meses);
    echo "<br>";
    echo count($Meses);
    echo "<br>";
    $Meses[]=7;
    $Meses[]="Abril";
    $Meses[]=true;
    $Meses[]="Junio";
    var_dump($Meses);
    echo count($Meses);
    echo "<br>";
    unset($Meses[3]);
    echo "<br>";
    $Meses[5] = "Mayo";
    var_dump($Meses);
    echo "<br>";
    $Meses[]= "Julio";
    $Meses[]= "Agosto";
    $Meses[]= "Septiembre";
    $Meses[]= "Octubre";
    var_dump($Meses);
    ?>
</body>
</html>