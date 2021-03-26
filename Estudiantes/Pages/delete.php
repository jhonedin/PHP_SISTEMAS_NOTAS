<?php
    require_once('../../Usuarios/Modelo/Usuarios.php'); // llamo al modelo de usuarios
    
    $ModeloUsuarios = new Usuarios(); // creamos una nueva instancia de usuarios
    $ModeloUsuarios->validateSession(); // validamos la sesion.

    $Id = $_GET['Id'];
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
    <h2 class="title-createnew">Eliminar Estudiantes</h2>
    <form class="formularioEstudiante" method="POST" action="../Controladores/delete.php">
        <input type="hidden" name="Id" value="<?php echo $Id ?>">
        <p id="textEliminarEstudiante">¿Estas seguro que deseas eliminar este estudiante?</p>
        <input type="submit" value="Eliminar Estudiante">
    </form>
</body>
</html>