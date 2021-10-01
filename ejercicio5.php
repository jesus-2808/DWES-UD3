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
    $num_tabla=5;
    $i=1;
    
   do {
    $total=$num_tabla*$i;
    echo "$num_tabla*$i = $total";
    echo"<br>";

    $i++;
   } while($i<11);
            
    ?>

</body>
</html>