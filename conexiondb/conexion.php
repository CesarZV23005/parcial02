<?php
class Database {
    private $host = "db";
    private $db_name = "db_alumnos";
    private $username = "root";
    private $password = "rootpass";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "conectado";
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
class Alumno{
    public $nombre;
    public $telefono;
    public $fecha;
    public $direccion;
}

$database = new Database();
$conn_temp = $database->getConnection();
$stmt = $conn_temp->prepare("INSERT INTO tbl_alumno(nombre,telefono,fecha,direccion) VALUES(:nombre,:telefono,:fecha,:direccion)");

$alumno_obj = new Alumno();
$alumno_obj->nombre = "Cesar";
$alumno_obj->telefono = "0000-0000";
$alumno_obj->fecha = "04-11-2005";
$alumno_obj->direccion = "UES";

if($stmt->execute((array)$alumno_obj)){
    echo "INSERTADO";
}

