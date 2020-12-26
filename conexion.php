<?php     

class Conexion{

    protected $db; // atributo que retornar el constructos cada que vez que se haga el llamado desde una clase hija, contendra todo el proceso de conexion
    private $driver = "mysql";
    private $host = "localhost";
    private $bd = "notas";
    private $usuario = "root";
    private $contrasena = "";

    public function __construct()
    {
        try {
            $db = PDO("{$this->driver}:host={$this->host};dbname={$this->bd}",$this->usuario,$this->contrasena);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;

        } catch (PDOException $e) {
            echo "Ha surgido un error al tratar de conectarse a la base de datos ".$e->getMenssage();
        }

    }
}

?>