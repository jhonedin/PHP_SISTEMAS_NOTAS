<?php 
// llamados a la clase modelo de Docentes.
require_once("../Modelo/Docentes.php");

// revisamos si hay una peticion POST para eliminar un Docente
if($_POST){
    $ModeloDocentes = new Docentes(); //creamos una instancia de administrador
    $Id = $_POST['Id']; // recibimos el ID del docente que queremos eliminar
    $ModeloDocentes->delete($Id); // llamamos a la funcion de borrar y le pasamos el id del docente que desemos borrar
}
else{
    // con la instruccion header si no hay una peticion POST para eliminar una Materia
    // esta nos llevara a la ventana de logeo.
    header('Location: ../../index.php');
}


?>