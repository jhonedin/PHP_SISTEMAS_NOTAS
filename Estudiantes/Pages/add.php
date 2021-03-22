<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../../Metodos.php');
    $ModeloUsuarios = new Usuarios();
    $ModeloUsuarios->validateSession();

    $ModeloMetodos = new Metodos();

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
</head>
<body>
    <header> 
        <h1>SISTEMAS DE NOTAS </h1>
    </header> 
    <h2 class="title-createnew">Registrar Estudiantes</h2>
    <form class="formularios" method="POST" action="../Controladores/add.php">
        <label>Nombre:</label> 
        <input  id="inputNombreEstudiantes" type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre"><br><br>
        <label>Apellido:</label> 
        <input id="inputApellidoEstudiantes" type="text" name="Apellido" required="" autocomplete="off" placeholder="Apellido"> <br><br>
        <label>Documento:</label>
        <input id="inputDocumentoEstudiantes" type="text" name="Documento" required="" autocomplete="off" placeholder="Documento"> <br><br>
        <label>Correo:</label>
        <input id="inputEmailEstudiantes" type="email" name="Correo" required="" autocomplete="off" placeholder="Correo"> <br><br>
        <label>Materia:</label> 
        <select id="selectMateriaEstudiantes" name="Materia" required="">
            <option>Seleccione</option>
            <?php
            $Materias = $ModeloMetodos->getMaterias();
            if($Materias != null){
                foreach($Materias as $Materia){
                    ?>
                    <option value="<?php echo $Materia['MATERIA']; ?>"><?php echo $Materia['MATERIA']; ?></option>
                    <?php
                }
            }           
            ?>

        </select> <br><br>
        <label>Docente:</label>
        <select id="selectDocenteEstudiantes" name="Docente" required="">
            <option>Seleccione</option>
            <?php 
            $Docentes = $ModeloMetodos->getDocentes();
            if($Docentes != null){
                foreach($Docentes as $Docente){
                    ?>
                    <option value="<?php echo $Docente['NOMBRE'] . ' ' . $Docente['APELLIDO'] ?>">
                        <?php echo $Docente['NOMBRE'] . ' ' . $Docente['APELLIDO'] ?>
                    </option>
                    <?php
                }
            }           
            ?>
        </select> <br><br>
        <label>Promedio:</label>
        <input id="inputPromedioEstudiantes" type="number" name="Promedio" required="" autocomplete="off" placeholder="Promedio"> <br><br>
        <input type="submit" value="Registrar Estudiante">
    </form>
</body>
</html>