<?php
    echo $_GET['Id'];
?>
<!DOCTYPE html>
<html>
<head> 
    <title>SISTEMA DE NOTAS</title>
</head>
<body> 
    <h1>Eliminar Estudiante </h1>
    <form method="POST" action="../Controladores/delete.php">
        <input type="hidden" name="Id" value="">
        <p>¿Estas seguro que deseas eliminar este estudiante?</p>
        <input type="submit" value="Eliminar Estudiante">
    </form>
</body>
</html>