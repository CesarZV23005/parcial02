<?php
if($_SERVER['REQUEST_METHOD'] == $_POST){
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $fecha = $_POST["fecha"];
    $direccion = $_POST["direccion"];
    $btn = $_POST["boton"];
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <h1>Ingreso de alumnos</h1>
    <form method="post">
        <label>Ingrese su nombre</label>
        <input name="nombre" type="text" placeholder="Javier Paiz"><br>
        <br>
        <label>Ingrese su numero de telefono</label>
        <input name="telefono" type="text" placeholder="0000-0000"><br>
        <br>
        <label>Ingrese su fecha de nacimiento</label>
        <input name="fecha" type="text" placeholder="DD-MM-YYYY"><br>
        <br>
        <label>Ingrese su direccion</label>
        <input name="direccion" type="text" placeholder="UES, San Miguel"><br>
        <br>
        <button name="boton" type="submit">REGISTRAR</button>
    </form>
</body>
</html>
