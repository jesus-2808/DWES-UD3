<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario registro</h1>
    <?php
$poblacion="";
$codigo_postal="";
$codigo_incorrecto="";
$poblacion_incorrecta="";
$prov_vacio="";
$imagen;
$texto = "";

if ($_SERVER["REQUEST_METHOD"]=="POST"){

    $texto = $_POST["texto"];
            $imagen = $_FILE["imagen"]["name"];
            $texto = strip_tags($texto);
            $texto = stripslashes($texto);
            $texto = htmlspecialchars($texto);

            if($imagen = ""){
                $imagen = "Imagen no enviada";
            }else{
                $imagen = "Imagen enviada";
            }

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

if(!preg_match("/^[0-9]*$/",  $codigo_postal)){
    $codigo_incorrecto="el codigo postal debe estar formado solo por numeros";
} else {
  $codigo_postal=$_POST["codigo_postal"];
}



//if (!isset($_POST["provincia"])) {
                
   // $prov_vacio = "No ha seleccionado ninguno";
//}

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

if(!isset($_POST["provincias"])){
    $prov_vacio= "No has seleccionado ninguno";
  } else {
    $provincias=$_POST["provincias"];
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
             <div>
                <label for="provincias">Sevilla</label>    
                <input type="radio" name="provincias" value="Sevilla" > 
            </div>
                <div>
                <label for="provincias">Cádiz</label>    
                <input type="radio" name="provincias" value="Cádiz"> 
                </div>
                <div>
                <label for="provincias">Huelva</label>    
                <input type="radio" name="provincias" value="Huelva">
                </div>
                <div>
                <label for="provincias">Granada</label>    
                <input type="radio" name="provincias" value="Granada">
                </div>
                <div>
                <label for="provincias">Málaga</label>    
                <input type="radio" name="provincias" value="Málaga">
                </div>
                <div>
                <label for="provincias">Jaen</label>    
                <input type="radio" name="provincias" value="Jaén">
                </div>  
                <div>
                <label for="provincias">Almería</label>    
                <input type="radio" name="provincias" value="Almería">
                </div>
                <span style="color:red"><?php echo $prov_vacio;?> </span>
            </p>
            <p>
        <textarea name="texto" id="" cols="30" rows="10" placeholder="Descripcion del municipio" value="<?php echo $texto?>"></textarea>
        </p>
        <p>
            <label for="imagen">Imagen</label>
            <input type="file"  id="imagen" name="imagen" accept="image/*">
        </p>
        <p>
<input type="submit" name="enviar" value="Aceptar"/>
<input type="reset" name="cancelar" value="Cancelar"/>
  </p>
    </form>


</body>
</html>