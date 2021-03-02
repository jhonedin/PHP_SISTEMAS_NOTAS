<?php

require_once('../Modelo/Docentes.php');

if($_POST){
    $ModeloDocentes = new Docentes(); // instancia de la capa modelo de Materias

    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Usuario = $_POST['Usuario'];
    $Contrasena = $_POST['Contrasena'];
    $ModeloDocentes->add($Nombre, $Apellido, $Usuario, $Contrasena);
}
else{
    header('Location:../../index.php');
}
?>