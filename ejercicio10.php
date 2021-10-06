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
$factorial=1;
$numero_acalcular=5;

for ($i=$numero_acalcular; $i >=1 ; $i--) { 
  $factorial= $factorial*$i;

}
    echo ("el factorial de $numero_acalcular es $factorial")
?>
</body>
</html>