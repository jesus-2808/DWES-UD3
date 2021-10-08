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
$contrasenya_incorrecta="";
if ($_SERVER["REQUEST_METHOD"]=="POST"){

$usuario=strip_tags($_POST["usuario"]);
$usuario=stripslashes($_POST["usuario"]);
$usuario=htmlspecialchars($_POST["usuario"]);
$contrasenya=$_POST["contrasenya"];



if(preg_match("/[A-Z][a-z]{15}[0-9]/",  $contrasenya)){
  
} else {
    $contrasenya_incorrecta="contraseña incorrecta";
}

//if(preg_match("/[A-Z][a-z]{15}[0-9]",  $contrasenya)){
    //echo "contrasña correcta";
//} else {
 //   echo " contraseña incorrecta";
//}



if(empty($usuario)){
    echo "el usuario debe estar relleno <br>";
}if(empty($contrasenya)){
    echo "la contraseña debe estar rellena <br>";
}

}

?> 


    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <p>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario"/>
            <span style="color:red"></span>
        </p>
        <p>
            <label for="contrasenya">Contraseña</label>
            <input type="password" name="contrasenya"/>
            <span style="color:red"><?php echo $contrasenya_incorrecta; ?></span>
        </p>
        <p>
<input type="submit" name="enviar" value="Aceptar"/>
<input type="reset" name="cancelar" value="Cancelar"/>
  </p>
    </form>


</body>
</html>