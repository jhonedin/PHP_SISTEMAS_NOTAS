<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../Modelo/Estudiantes.php');
    require_once('../../Metodos.php');

    $ModeloUsuarios = new Usuarios();
    $ModeloUsuarios->validateSession();

    $Modelo = new Estudiantes();
    $Id = $_GET['Id'];
    $InformacionEstudiante = $Modelo->getById($Id);

    $ModeloMetodos = new Metodos();// Creamos una instancia de la clase metodos para usar los metodos genericos
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">  

    <title>SISTEMA DE NOTAS</title>
    <link type="text/css" rel="stylesheet" href="../../styles.css">
    <style>
        .title-editEstudiantes { 
        color: white;
        text-align: center; 
   
        }
    </style>
</head>
<body> 
    <header> 
        <h1>SISTEMAS DE NOTAS </h1>
    </header> 
    <h2 class="title-editEstudiantes">Editar Estudiante </h2>
    <form class="formularioEstudiante" method="POST" action="../Controladores/edit.php">
        <input type="hidden" name="Id" value="<?php echo $Id; ?>">
        <?php // Mostramos en los campos la informacion previa de ese estudiante
            if($InformacionEstudiante != null){
                foreach($InformacionEstudiante as $Info ){ 
            
        ?>
        <label>Nombre:</label> 
        <input id="inputNombreEstudiantes" type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre"
            value="<?php echo $Info['NOMBRE'] ?>"><br><br>
        <label>Apellido:</label>
        <input id="inputApellidoEstudiantes" type="text" name="Apellido" required="" autocomplete="off" placeholder="Apellido"
            value="<?php echo $Info['APELLIDO'] ?>"> <br><br>
        <label>Documento:</label>
        <input id="inputDocumentoEstudiantes" type="text" name="Documento" required="" autocomplete="off" placeholder="Documento"
            value="<?php echo $Info['DOCUMENTO'] ?>"> <br><br>
        <label>Correo:</label>
        <input id="inputEmailEstudiantes" type="email" name="Correo" required="" autocomplete="off" placeholder="Correo"
            value="<?php echo $Info['CORREO'] ?>"> <br><br>
        <label>Materia:</label>
        <select id="selectMateriaEstudiantes" name="Materia" required="">
            <option value="<?php echo $Info['MATERIA'] ?>"><?php echo $Info['MATERIA'] ?></option>
            <?php
            $Materias = $ModeloMetodos->getMaterias();
            if($Materias != null){
                foreach($Materias as $Materia){
            ?>
            <option value="<?php echo $Materia['MATERIA'] ?>"><?php echo $Materia['MATERIA'] ?></option>
            <?php 
                }
            }
            ?>
        </select> <br><br>
        <label>Docente:</label>
        <select id="selectDocenteEstudiantes" name="Docente" required="">
            <option value="<?php echo $Info['DOCENTE'] ?>"><?php echo $Info['DOCENTE'] ?></option>
            <?php
            $Docentes = $ModeloMetodos->getDocentes();
            if($Docentes != null){
                foreach($Docentes as $Docente){
            ?>
            <option value="<?php echo $Docente['NOMBRE'].' '.$Docente['APELLIDO'] ?>">
                <?php echo $Docente['NOMBRE'].' '.$Docente['APELLIDO'] ?></option>
            <?php 
                }
            }
            ?>
            
        </select> <br><br>
        <label>Promedio:</label>
        <input id="inputPromedioEstudiantes" type="number" name="Promedio" required="" autocomplete="off" placeholder="Promedio"
            value="<?php echo $Info['PROMEDIO'] ?>"> <br><br>
        <?php
                }
            }
        ?>
        <input type="submit" value="Editar Estudiante">
        
    </form>
</body>
</html>