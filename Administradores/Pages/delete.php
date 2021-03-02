<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../Modelo/Administradores.php');
    $ModeloUsuarios = new Usuarios();
    $ModeloUsuarios->validateSession();
 
    $Id = $_GET['Id'];
    
?>
<html>
<head> 
    <title>SISTEMA DE NOTAS</title>
</head>
<body> 
    <h1>Eliminar Administrador quiu</h1>
    <form method="POST" action="../Controladores/delete.php">
        <input type="hidden" name="Id" value="<?php echo $Id ?>">
        <p>¿Estas seguro que deseas eliminar este Administrador?</p>
        <input type="submit" value="Eliminar Administrador">
    </form>
</body>
</html>