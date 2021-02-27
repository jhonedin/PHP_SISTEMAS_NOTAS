<?php
    require_once('../../Materias/Modelo/Materias.php'); // llamo al modelo de usuarios
    
    $ModeloUsuarios = new Usuarios(); // creamos una nueva instancia de usuarios
    $ModeloUsuarios->validateSession(); // validamos la sesion.

    $Id = $_GET['Id'];
?>
<html>
<head> 
    <title>SISTEMA DE NOTAS</title>
</head>
<body> 
    <h1>Eliminar Materia </h1>
    <form method="POST" action="../Controladores/delete.php">
        <input type="hidden" name="Id" value="">
        <p>¿Estas seguro que deseas eliminar esta Materia?</p>
        <input type="submit" value="Eliminar Materia">
    </form>
</body>
</html>