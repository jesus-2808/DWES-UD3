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

    $nombresProductos=array();
    $nombresProductos[]=array("Nombre"=>"Coche", "precio" => "18000", "Stock" =>"20","Identificador" =>"Toyota");
    $nombresProductos[]=array("Nombre"=>"Coche", "precio" => "25000", "Stock" =>"10","Identificador" =>"Seat");
    $nombresProductos[]=array("Nombre"=>"Moto", "precio" => "15000", "Stock" =>"3","Identificador" =>"Ducati");
    $recorrido;
    $indice;
    echo('<pre>');
    var_dump($nombresProductos);
    echo('</pre>');
    echo "<br>";
    echo "<table border =2>";
    
      echo "<th>", "Nombre", "</th>";
      echo "<th>", "precio", "</th>";
      echo "<th>", "stock", "</th>";
      echo "<th>", "identificador", "</th>";
      echo "<tr>";
        
    
  foreach ($nombresProductos as $clave => $valor){
    echo "<tr>";
    echo "<td>";
  
    echo $valor['Nombre'];

    echo "</td>";

   
    echo "<td>";
  
    echo $valor['precio'];

    echo "</td>";
    
    
    echo "<td>";
  
    echo $valor['Stock'];

    echo "</td>";

    echo "<td>";
  
    echo $valor['Identificador'];

    echo "</td>";
    echo "</tr>";
   
  }
 

    echo " </table> ";
 
    ?>
</body>
</html>