<?php
if($_SERVER['REQUEST_METHOD'] == $_POST){
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Registro de datos</h1>
        <p>Ingrese su datos para continuar al calculo</p>
        <form method="post">
            <label>Ingrese su nombre</label>
            <input type="text" placeholder="Nombre"><br>
            <br>
            <label>Ingrese su correo electronico</label>
            <input type="text" placeholder="direccion@gmail.com"><br>
            <br>
            <label>Ingrese su DUI</label>
            <input type="text" placeholder="0000000-0"><br>
            <br>
            <button type="submit">REGISTRAR</button>
        </form>
    </div>    
</body>
</html>