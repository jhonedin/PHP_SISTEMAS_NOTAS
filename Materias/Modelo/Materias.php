<?php 

require_once('../../conexion.php');

class Materias extends conexion{

    public function __construct(){
        $this->db = parent::open();// De la clase padre traemos el metodo que abre la conexion
    }

    public function add($Materia){
        $statement = $this->db->prepare("INSERT INTO materias (MATERIA) VALUES (:Materia) ");
        $statement->bindParam(':Materia',$Materia);
        if($statement->execute()){
            header('Location: ../Pages/index.php');
        }else{
            header('Location: ../Pages/add.php');
        }

    }

    public function get(){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM materias");
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;

    }

    public function getById($Id){
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM materias WHERE ID_MATERIA = :Id");
        $statement->bindParam(':Id',$Id);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;

    }

    public function update($Id, $Materia){
        $statement = $this->db->prepare("UPDATE materias SET MATERIA = :Materia WHERE ID_MATERIA = :Id");
        $statement->bindParam(':Id',$Id);
        $statement->bindParam(':Materia',$Materia);
        if($statement->execute()){
            header('Location: ../Pages/index.php');
        }else{
            header('Location: ../Pages/edit.php');
        }

    }

    public function delete($Id){
        $statement = $this->db->prepare("DELETE FROM materias WHERE ID_MATERIA = :Id");
        $statement->bindParam(':Id',$Id);
        if($statement->execute()){
            header('Location: ../Pages/index.php');
        }else{
            header('Location: ../Pages/delete.php');
        } 
        
    }

}

?>