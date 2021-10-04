<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border ="1" width="30%">
        <caption>potencia de 2</caption>
        <tr><td>elevado a 0</td> 
    
    <td> Resultado</td></tr>
        
    <?php

    
    $max=6;
    $resultados;
    
for ($i =0; $i <= $max; $i++) {
    $resultados=pow(2, $i);
    echo"<tr>";
    echo "<td>$i</td>";
    echo"<td>
    $resultados
   </td>";
    echo "</tr>";
   
    
 



}
   
    ?>
</body>
</html>