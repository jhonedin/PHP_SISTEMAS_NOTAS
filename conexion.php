<?php     

class Conexion{

    private $server = "mysql:host=localhost;dbname=notas";
	private $username = "root";
	private $password = "";
	private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
	protected $conn;
 	
	public function open(){
 		try{
 			$this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
 			return $this->conn;
 		}
 		catch (PDOException $e){
 			echo "Ocurrió un problema con la conexión: " . $e->getMessage();
 		}
 
    }
 
	public function close(){
   		$this->conn = null;
 	}


    /*
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

    }*/
}

?>