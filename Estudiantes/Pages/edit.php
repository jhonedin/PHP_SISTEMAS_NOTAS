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
    <title>SISTEMA DE NOTAS</title>
</head>
<body> 
    <h1>Registrar Estudiante </h1>
    <form method="POST" action="../Controladores/edit.php">
        <input type="hidden" name="Id" value="<?php echo $Id; ?>">
        <?php // Mostramos en los campos la informacion previa de ese estudiante
            if($InformacionEstudiante != null){
                foreach($InformacionEstudiante as $Info ){ 
            
        ?>
        Nombre <br>
        <input type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre"
            value="<?php echo $Info['NOMBRE'] ?>"><br><br>
        Apellido <br>
        <input type="text" name="Apellido" required="" autocomplete="off" placeholder="Apellido"
            value="<?php echo $Info['APELLIDO'] ?>"> <br><br>
        Documento <br>
        <input type="text" name="Documento" required="" autocomplete="off" placeholder="Documento"
            value="<?php echo $Info['DOCUMENTO'] ?>"> <br><br>
        Correo <br>
        <input type="email" name="Correo" required="" autocomplete="off" placeholder="Correo"
            value="<?php echo $Info['CORREO'] ?>"> <br><br>
        Materia <br>
        <select name="Materia" required="">
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
        Docente <br>
        <select name="Docente" required="">
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
        Promedio <br>
        <input type="number" name="Promedio" required="" autocomplete="off" placeholder="Promedio"
            value="<?php echo $Info['PROMEDIO'] ?>"> <br><br>
        <?php
                }
            }
        ?>
        <input type="submit" value="Editar Estudiante">
        
    </form>
</body>
</html>