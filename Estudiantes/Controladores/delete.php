<?php 
// llamados a la clase modelo de estudiantes.
require_once("../Modelo/Estudiantes.php");

// revisamos si hay una peticion POST para eliminar un estudiante
if($_POST){
    $Modelo = new Estudiantes(); //creamos una instancia de estudiante
    $Id = $_POST['Id']; // recibimos el ID del estudiante que queremos eliminar
    $Modelo->delete($Id); // llamamos a la funcion de borrar y le pasamos el id del estudiante que desemos borrar
}
else{
    // con la instruccion header si no hay una peticion POST para eliminar un estudiante
    // esta nos llevara a la ventana de logeo.
    header('Location: ../../index.php');
}


?>