<?php

require_once('../Modelo/Docentes.php');

if($_POST){
    $ModeloDocentes = new Docentes(); // instancia de la capa modelo de Docentes
    
    $Id = $_POST['Id'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Usuario = $_POST['Usuario'];
    $Contrasena = $_POST['Contrasena'];
    $Estado = $_POST['Estado'];
    $ModeloDocentes->update($Id, $Nombre, $Apellido, $Usuario, $Contrasena, $Estado);
}
else{
    header('Location:../../index.php');
}
?>