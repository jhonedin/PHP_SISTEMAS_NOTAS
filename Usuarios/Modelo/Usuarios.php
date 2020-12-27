<?php 

require_once('../../conexion.php');
session_start();
class Usuarios extends conexion{

    public function __construct(){
        $this->db = parent::__construct(); // hacemos llamando al constructor de la clase padre
    }

    public function login($Usuario,$Password){ // metodo login para iniciar sesion
        $row = null; // guarda la fila de la seleccion 
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE USUARIO = :Usuario AND PASSWORD = :Password");
        $statement->bindParam(':Usuario',$Usuario);
        $statement->bindParam(':Password',$Password);
        $statement->execute();
        if($statement->rowCount() == 1){
            $result = $statement->fetch();
            $_SESSION['NOMBRE'] = $result["NOMBRE"] . " " . $result['APELLIDO'];
            $_SESSION['ID'] = $result['ID_USUARIO'];
            $_SESSION['PERFIL'] = $result['PERFIL'];
            return true;
        }
        return false;
    }

    public function getNombre(){
        return $_SESSION['NOMBRE'];
    }

    public function getId(){
        return $_SESSION['ID'];
    }

    public function getPerfil(){
        return $_SESSION['PERFIL'];
    }

    public function validateSession(){
        if($_SESSION['ID'] == null){
            header('Location: ../../index.php');
        }
    }

    public function validateSessionAdministrador(){
        if($_SESSION['ID'] != null){
            if($_SESSION['PERFIL'] == 'Docente'){
                header('Location: ../../Estudiantes/Pages/index.php');
            }else{
                header('Location: ../../index.php');
            }
        }
    }
}

?>