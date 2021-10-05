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
    
    $fecha_nacimiento ="05-10-2003";
    $hoy= date("y-m-d");
    $edad_diff = date_diff(date_create($fecha_nacimiento), date_create($hoy));
      var_dump($edad_diff);
      echo "<br>";
      echo "Edad: ", $edad_diff->y;
   
    if ($edad_diff->y<18){
      echo ("pa tu casa, eres mu chico");
    } elseif ($edad_diff->y >=18 && $edad_diff->y <=65){
       echo ("pasa, cabesa");
    } else 
        echo ("eres mu viejo");
      

   ?>
</body>
</html>