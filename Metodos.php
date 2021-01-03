<?php 
/*
Esta Clase contiene metodos genericos que se usaran a los largo del proyecto y que tendran conexion
con la base de datos.
*/
require_once('Conexion.php');

class Metodos extends Conexion{

    public function __construct(){
        $this->db = parent::open();// De la clase padre traemos el metodo que abre la conexion
    }

    
    public function getMaterias(){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM materias");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    public function getDocentes(){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE PERFIL = 'Docente'");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }

    
}

?>