<?php

require_once('../Modelo/Administradores.php');

if($_POST){
    $ModeloAdministradores = new Administradores(); // instancia de la capa modelo de Materias

    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Usuario = $_POST['Usuario'];
    $Contrasena = $_POST['Contrasena'];
    $ModeloAdministradores->add($Nombre, $Apellido, $Usuario, $Contrasena);
}
else{
    header('Location:../../index.php');
}
?>