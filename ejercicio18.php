<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario Actividad Aula</h1>
    <?php
$poblacion="";
$codigo_postal="";
$codigo_incorrecto="";
$poblacion_incorrecta="";
if ($_SERVER["REQUEST_METHOD"]=="POST"){

$poblacion=strip_tags($_POST["poblacion"]);
$poblacion=stripslashes($_POST["poblacion"]);
$poblacion=htmlspecialchars($_POST["poblacion"]);
$codigo_postal=strip_tags($_POST["codigo_postal"]);
$codigo_postal=stripslashes($_POST["codigo_postal"]);
$codigo_postal=htmlspecialchars($_POST["codigo_postal"]);

if(!preg_match("/^[a-zA-Z ]*$/",  $poblacion)){
    $poblacion_incorrecta="solo puede insertar letras en el campo poblacion";
} else {
   $poblacion=$_POST["poblacion"];
}

if(!preg_match("/[0-9]/",  $codigo_postal)){
    $codigo_incorrecto="el codigo postal debe estar formado solo por numeros";
} else {
  $codigo_postal=$_POST["codigo_postal"];
}

//if(preg_match("/[A-Z][a-z]{15}[0-9]",  $contrasenya)){
    //echo "contrasña correcta";
//} else {
 //   echo " contraseña incorrecta";
//}



if(empty($poblacion)){
    echo "la poblacion debe estar rellena <br>";
}if(empty($codigo_postal)){
    echo "el codigo postal debe estar relleno <br>";
}

}

?> 


    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <p>
            <label for="poblacion">poblacion</label>
            <input type="text" name="poblacion"  value="<?php echo $poblacion; ?>"/>
            <span style="color:red"><?php echo $poblacion_incorrecta; ?></span>
        </p>
        <p>
            <label for="codigo_postal">Código postal</label>
            <input type="text" name="codigo_postal" value="<?php echo $codigo_postal; ?>">
            <span style="color:red"><?php echo $codigo_incorrecto; ?></span>
        </p>
        <p>
<input type="submit" name="enviar" value="Aceptar"/>
<input type="reset" name="cancelar" value="Cancelar"/>
  </p>
    </form>


</body>
</html>