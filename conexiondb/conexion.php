<?php
class Database
{
    private $host = "db";
    private $db_name = "db_alumnos";
    private $username = "root";
    private $password = "rootpass";
    public $conn;

    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "conectado";
        } catch (PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
class Alumno
{
    public $nombre;
    public $telefono;
    public $fecha;
    public $direccion;
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
        <?php
        $nombre = $_POST['nombre'];
        ?>
        <br>
        <label>Ingrese su numero de telefono</label>
        <input name="telefono" type="text" placeholder="0000-0000"><br>
        <?php
        $telefono = $_POST['telefono'];
        ?>
        <br>
        <label>Ingrese su fecha de nacimiento</label>
        <input name="fecha" type="text" placeholder="DD-MM-YYYY"><br>
        <?php
        $fecha = $_POST['fecha'];
        ?>
        <br>
        <label>Ingrese su direccion</label>
        <input name="direccion" type="text" placeholder="UES, San Miguel"><br>
        <?php
        $direccion = $_POST['direccion'];
        ?>
        <br>
        <button name="boton" type="submit">REGISTRAR</button>
        <?php
        
        $database = new Database();
        $conn_temp = $database->getConnection();
        $stmt = $conn_temp->prepare("INSERT INTO tbl_alumno(nombre,telefono,fecha,direccion) VALUES(:nombre,:telefono,:fecha,:direccion)");

        $alumno_obj = new Alumno();
        $alumno_obj->nombre = "$nombre";
        $alumno_obj->telefono = "$telefono";
        $alumno_obj->fecha = "$fecha";
        $alumno_obj->direccion = "$direccion";

        if ($stmt->execute((array) $alumno_obj)) {
            echo "INSERTADO";
        }

        ?>
    </form>
</body>

</html>