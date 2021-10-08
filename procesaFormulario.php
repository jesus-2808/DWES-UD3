<?php
$usuario=strip_tags($_POST["usuario"]);
$usuario=stripslashes($_POST["usuario"]);
$usuario=htmlspecialchars($_POST["usuario"]);
$contrasenya=$_POST["contrasenya"];

if(preg_match("/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$",  $contrasenya)){
    echo "contrasña correcta";
} else {
    echo " contraseña incorrecta";
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

echo "el usuario $usuario tiene la contraseña $contrasenya";
?>
