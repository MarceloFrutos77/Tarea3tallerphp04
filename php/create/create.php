<?php
    error_reporting(E_ALL)
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php
        require_once dirname(__FILE__,3).'/php/config/header.php';
   ?>
    <title>Create record</title>
</head>
<body>
    <?php
        require_once dirname (__FILE__,3).'/php/config/menu.php';
    ?>
    <div class="container-md">
        <h2>index de creacion</h2>
    
        <?php
            $saltolinea= "\n"
            $fichero=fopen("datos.txt","a") or die ("Problema en la creacion");
            fputs($fichero, $_POST['nombre'].$saltolinea);
            fputs($fichero, $_POST['apellido'].$saltolinea);
            fputs($fichero, $_POST['telefono'].$saltolinea);
            fputs($fichero, $_POST['cedula'].$saltolinea);
            fputs($fichero,"-------------------------");
            fclose($fichero);
            echo "Datos guardados correctamente!";

        ?>
    </div>
</body>
    <?php
        require_once dirname (__FILE__,3).'/php/config/footer.php';
    ?>
</html>
