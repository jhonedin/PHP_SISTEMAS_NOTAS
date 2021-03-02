<?php

require_once('../Modelo/Administradores.php');

if($_POST){
    $ModeloAdministradores = new Administradores(); // instancia de la capa modelo de Administradores
    
    $Id = $_POST['Id'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Usuario = $_POST['Usuario'];
    $Contrasena = $_POST['Contrasena'];
    $Estado = $_POST['Estado'];
    $ModeloAdministradores->update($Id, $Nombre, $Apellido, $Usuario, $Contrasena, $Estado);
}
else{
    header('Location:../../index.php');
}
?>