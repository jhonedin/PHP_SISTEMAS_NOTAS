<?php 

require_once('../Modelo/Estudiantes.php');

if($_POST){
    $ModeloEstudiantes = new Estudiantes(); // instancia del modelo de estudiantes
    // Se recopilan todos los datos del estudiante por metodo post
    $Id = $_POST['Id'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Documento = $_POST['Documento'];
    $Correo = $_POST['Correo'];
    $Materia = $_POST['Materia'];
    $Docente = $_POST['Docente'];
    $Promedio = $_POST['Promedio'];
    $Fecha = date('Y-m-d');
    // por medio de la funcion update de la clase modelo estudiante.
    $ModeloEstudiantes->update($Id, $Nombre,$Apellido,$Documento,$Correo,$Materia,$Docente,$Promedio,$Fecha);
}else{
    header('Location: ../../index.php');
}

?>