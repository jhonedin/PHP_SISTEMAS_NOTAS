<?php 
// llamados a la clase modelo de materias.
require_once("../Modelo/Materias.php");

// revisamos si hay una peticion POST para eliminar un estudiante
if($_POST){
    $Modelo = new Materias(); //creamos una instancia de estudiante
    $Id = $_POST['Id']; // recibimos el ID del estudiante que queremos eliminar
    $Modelo->delete($Id); // llamamos a la funcion de borrar y le pasamos el id de la materia que desemos borrar
}
else{
    // con la instruccion header si no hay una peticion POST para eliminar una Materia
    // esta nos llevara a la ventana de logeo.
    header('Location: ../../index.php');
}


?>