<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
<?php
$nombre="";
$apellidos="";
$direccion="";
$instituto="";
$estudios_elegidos="";
$rVacio="";
$diaVacio="";
$checkVacio="";
$red;
$dia;


$texto_final="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["checkbox"])){
            $checkbox = $_POST["checkbox"];
        }  else {
            $checkVacio = "Ninguno de los checkbox ha sido activado.";
        }
            
        if(isset($_POST["dia"])){
            $checkbox = $_POST["dia"];
        }  else {
            $diaVacio = "selecciona un dia de la semana";
        }
       
               
        if(isset($_POST["red"])){
          $red = $_POST["red"];
        } else {
            $rVacio = "selecciona una red";
        }
       
        
        if (empty($_POST["nombre"])){
           echo "el nombre debe estar relleno";
           echo "<br>";
        }
        else{
            $nombre= $_POST["nombre"];
        }
        if(empty($_POST["apellidos"]))
        {
            echo "los apellidos deben estar rellenos";
            echo "<br>";
        }else {
            $apellidos= $_POST["apellidos"];
        }

        if (empty($_POST["direccion"])){
            echo "la direccion debe estar rellena";
            echo "<br>";
         }
         else{
             $direccion= $_POST["direccion"];
         }

         if (empty($_POST["instituto"])){
            echo "el instituto debe estar relleno";
            echo "<br>";
         }
         else{
             $instituto= $_POST["instituto"];
         }
       
        if(!preg_match('/^ies+/i', $instituto)){
          echo "inserte un instituto que empiece por IES";
          echo "<br>";
        } else{
            $instituto= $_POST["instituto"];
        }
        if (empty($_POST["estudios_elegidos"])){
            echo "los estudios a realizar deben estar rellenos";
            echo "<br>";
         }
         else{
             $estudios_elegidos= $_POST["estudios_elegidos"];
         }


         if (empty($_POST["campoTextarea"])){
            echo "el texto no puede estar vacio";
            
         }
         else{
             $texto_final= $_POST["campoTextarea"];
         }

       
        $nombre = stripslashes($nombre);
        $nombre = strip_tags($nombre);
        $nombre = htmlspecialchars($nombre);

        $apellidos = stripslashes($apellidos);
        $apellidos = strip_tags($apellidos);
        $apellidos = htmlspecialchars($apellidos);

        $direccion = stripslashes($direccion);
        $direccion = strip_tags($direccion);
        $direccion = htmlspecialchars($direccion);

        $estudios_elegidos = stripslashes($estudios_elegidos);
        $estudios_elegidos = strip_tags($estudios_elegidos);
        $estudios_elegidos = htmlspecialchars($estudios_elegidos);

        $texto_final = stripslashes($texto_final);
        $texto_final = strip_tags($texto_final);
        $texto_final = htmlspecialchars($texto_final);
        
    }
    ?>
    <h1>Formulario Actividad Aula</h1>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="Post">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="<?php echo $nombre;?>"/>
            <span style="color:red"></span>
        </p>
        <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" value="<?php echo $apellidos;?>"/>
            <span style="color:red"></span>
        </p>

        <p>
            <label for="Direccion">Direccion</label>
            <input type="text" name="direccion" value="<?php echo $direccion;?>"/>
            <span style="color:red"></span>
            
        </p>
        <p>
            <label for="Instituto">Instituto</label>
            <input type="text" name="instituto" value="<?php echo $instituto;?>"/>
            <span style="color:red"></span>
            
        </p>
        <p>
            <label for="estudios_elegidos">Estudios elegidos</label>
            <input type="text" name="estudios_elegidos" value="<?php echo $estudios_elegidos;?>"/>
            <span style="color:red"> </span>
        </p>

       <div>
       <p>
                <label for="red">Wifi</label>    
                <input type="radio" name="red" value="wifi" >
                <label for="red">Cable</label>    
                <input type="radio" name="red" value="cable">
                <label for="red">Fibra</label>    
                <input type="radio" name="red" value="fibra">
                <span style="color:red"><?php echo $rVacio?> </span>
            </p>
    </div>
             <select name="dia[]" multiple>
                <option value="lunes">Lunes</option>
                <option value="martes">Martes</option>
                <option value="miercoles">Miercoles</option>
                <option value="jueves">Jueves</option>
                <option value="viernes">Viernes</option>
                <span style="color:red"><?php echo $diaVacio?> </span>
            </select>
    </div>
        <p>
            <p><h4>Preferencias</h4></p>
            <p>
                <input type="checkbox" name="checkbox[]" value="historia">
                <label for="historia">Historia</label>
                <input type="checkbox" name="checkbox[]" value="geografia">
                <label for="geografia">Geografia</label>
                <input type="checkbox" name="checkbox[]" value="lengua">
                <label for="lengua">Lengua</label>
                <input type="checkbox" name="checkbox[]" value="matematicas">
                <label for="matematicas">Matematicas</label>
                <span style="color:red"><?php echo $checkVacio?> </span>
            </p>
        <div>
      
        <textarea name="campoTextarea"  rows="10" cols="40" placeholder="Inserte aqui el texto" value="<?php echo $texto_final; ?>"></textarea>
    </div>
        </p>
        <p>
            <input type="submit" name="enviar" value="Aceptar"/>
            <input type="reset" name="cancelar" value="Cancelar"/>
        </p>
    </form>
</body>
</html>