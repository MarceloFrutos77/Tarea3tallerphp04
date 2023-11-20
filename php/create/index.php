<?php
    error_reporting(E_ALL)
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php
        require_once dirname(__FILE__,3).'/php/config/header.php';
   ?>
    <title>Creando registro</title>
</head>
<body>
    <?php
        require_once dirname (__FILE__,3).'/php/config/menu.php';
    ?>
    <div class="container-md">
        <h2>Creando registro</h2>
        <form action="create.php" mothod="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">nombre</label>
                <input type="text" class="form-control" name= "nombre" id="nombre" placeholder="Example input placeholder">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">apellido</label>
                <input type="text" class="form-control" name= "apellido" id="apellido" placeholder="Another input placeholder">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">telefono</label>
                <input type="tel" class="form-control" name= "telefono" id="telefono" placeholder="Another input placeholder">
            </div>
            <div class="mb-3">
                <label for="cedula" class="form-label">celuda</label>
                <input type="text" class="form-control" name= "nombre" id="nombre" placeholder="Another input placeholder">
            </div>
            <div class="mb-3">
                <input class="btn btn-dark" type="submit" value="Guardar">
            </div>
            
    </div>

</body>
    <?php
        require_once dirname (__FILE__,3).'/php/config/footer.php';
    ?>
</html>