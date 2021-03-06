<?php 

require_once('../../Conexion.php');
session_start();

class Usuarios extends Conexion{

    public function __construct(){
        $this->db = parent::open(); 
    }

    public function login($Usuario,$Contrasena){ // metodo login para iniciar sesion
       
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE USUARIO = :Usuario AND CONTRASENA = :Contrasena");
        $statement->bindParam(':Usuario',$Usuario);
        $statement->bindParam(':Contrasena',$Contrasena);
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
            }
        }
    }

    // Funcion publica para cerrar la sesion del usuario
    public function salir(){
        $_SESSION['ID'] = null;
        $_SESSION['NOMBRE'] = null;
        $_SESSION['PERFIL'] = null;
        session_destroy();
        header('Location: ../../index.php');
    }
}

?>