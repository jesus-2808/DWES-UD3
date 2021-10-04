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
    
    $fecha=Date("d-m-Y");
    $año_nacimiento=strtotime("04-10-2003");
    $año_nacimiento = strtotime('31/01/2019');
    //Le das el formato que necesitas a la fecha
    $newformat = date('Y-m-d',$fecha );
    
    echo ("la fecha actual es $fecha");
    echo "<br>";
    $edad_persona=Date($fecha-$año_nacimiento);
    if ($edad_persona<18){
        echo ("pa tu casa, eres mu chico");
    } elseif ($edad_persona>18 && $edad_persona <65){
        echo ("pasa, cabesa");
    } else 
        echo ("eres mu viejo");
      

    ?>
</body>
</html>