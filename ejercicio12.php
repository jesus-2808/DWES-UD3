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
     $fecha_nacimiento =new DateTime("05-07-1992");
     $suma=0;
     $resto=0;
     $resultado=0;

   $año=$fecha_nacimiento->format("Y");
   $mes=$fecha_nacimiento->format("m");
   $dia=$fecha_nacimiento->format("d");

    $resultado=($año+$dia+$mes);

   while($resultado>0){
    $resto=$resultado%10;
    $resultado=$resultado/10;
    $suma+=$resto;
   }
   $resto=$suma%10;
   $suma=$suma/10;
   $resultado=$resto+$suma;
     
  echo(int)("el numero del tarot es " +$resultado);

    
    ?>
</body>
</html>