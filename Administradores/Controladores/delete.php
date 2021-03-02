<?php 
// llamados a la clase modelo de Administrador.
require_once("../Modelo/Administradores.php");

// revisamos si hay una peticion POST para eliminar un Administrador
if($_POST){
    $ModeloAdministradores = new Administradores(); //creamos una instancia de administrador
    $Id = $_POST['Id']; // recibimos el ID del administrador que queremos eliminar
    $ModeloAdministradores->delete($Id); // llamamos a la funcion de borrar y le pasamos el id del administrador que desemos borrar
}
else{
    // con la instruccion header si no hay una peticion POST para eliminar una Materia
    // esta nos llevara a la ventana de logeo.
    header('Location: ../../index.php');
}


?>