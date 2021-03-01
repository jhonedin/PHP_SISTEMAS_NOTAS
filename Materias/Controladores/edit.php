<?php

require_once('../Modelo/Materias.php');

if($_POST){
    $Modelo = new Materias(); // instancia de la capa modelo de Materias
    $Id = $_POST['Id'];
    $Nombre = $_POST['Nombre'];
    $Modelo->update($Id, $Nombre);
}
else{
    header('Location:../../index.php');
}
?>