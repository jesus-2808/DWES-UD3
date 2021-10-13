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

$texto_final="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
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
            echo "el instituto debe estar rellena";
         }
         else{
             $instituto= $_POST["instituto"];
         }
       
        if(!preg_match('/^ies+/i', $instituto)){
          echo "inserte un instituto que empiece por IES";
        } else{
            $instituto= $_POST["instituto"];
        }
        if (empty($_POST["estudios_elegidos"])){
            echo "el instituto debe estar rellena";
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
  <input type="radio" id="wifi" name="wifi" value="wifi">
  <label for="html">Wifi</label><br>
  <input type="radio" id="cable" name="radio" value="cable">
  <label for="cable">cable</label><br>
  <input type="radio" id="fibra" name="fibra" value="fibra">
  <label for="javascript">fibra</label>
    </div>
        <select name="dias_semana" multiple>
            <option value="1" selected>Lunes</option>
            <option value="2">Martes</option>
            <option value="3" selected>Miércoles</option>
            <option value="4" selected>jueves</option>
            <option value="5" selected>viernes</option>
        </select>
    </div>
        <p>
            <p><h4>Preferencias</h4></p>
        <label for ="historia">
            <input type="checkbox" id="cbox1" value="Historia"> Historia</label>
        <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">Geografia</label>
        <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">Lengua</label>
        <input type="checkbox" id="cbox2" value="second_checkbox"> <label for="cbox2">Matematicas</label>
        <div>
      
        <textarea name="campoTextarea" value="<?php echo $texto_final; ?>"></textarea>
    </div>
        </p>
        <p>
            <input type="submit" name="enviar" value="Aceptar"/>
            <input type="reset" name="cancelar" value="Cancelar"/>
        </p>
    </form>
</body>
</html>