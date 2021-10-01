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
    $num1=10;
    $num2=4;
    $num3=12;

    if ($num1>$num2 && $num1>$num3){
        echo("el mayor es el $num1");
    } elseif($num2>$num1 && $num2>$num3){
        echo("el mayor es el $num2");
    }else { 
        echo("el mayor es el $num3");
    } 
       
    
    ?>
</body>
</html>