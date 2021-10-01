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

    $dia=1;

    switch($dia){
        case 1;
        echo "es lunes";
        break;

        case 2;
        echo "es martes";
        break;

        case 3;
        echo "es miercoles";
        break;

        case 4;
        echo "es jueves";
        break;

        case 5;
        echo "es viernes";
        break;

        case 6;
        echo "es sabado";
        break;

        case 7;
        echo "es domingo";
        break;

       default:
        echo "valor no valido";
        break;

        
    }


    ?>
</body>
</html>