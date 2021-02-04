<?php
    require_once('../../Usuarios/Modelo/Usuarios.php'); // llamo al modelo de usuarios
    
    $ModeloUsuarios = new Usuarios(); // creamos una nueva instancia de usuarios
    $ModeloUsuarios->validateSession(); // validamos la sesion.

    $Id = $_GET['Id'];
?>
<!DOCTYPE html>
<html>
<head> 
    <title>SISTEMA DE NOTAS</title>
</head>
<body> 
    <h1>Eliminar Estudiante </h1>
    <form method="POST" action="../Controladores/delete.php">
        <input type="hidden" name="Id" value="<?php echo $Id ?>">
        <p>¿Estas seguro que deseas eliminar este estudiante?</p>
        <input type="submit" value="Eliminar Estudiante">
    </form>
</body>
</html>