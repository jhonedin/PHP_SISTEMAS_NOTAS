<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');

    $ModeloUsuarios = new Usuarios();
    $ModeloUsuarios->validateSession();

    
?>
<html>
<head> 
    <title>SISTEMA DE NOTAS</title>
</head>
<body> 
    <h1>Registrar Docente </h1>
    <form method="POST" action="../Controladores/add.php">
        Nombre <br>
        <input type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre"><br><br>
        Apellido <br>
        <input type="text" name="Apellido" required="" autocomplete="off" placeholder="Apellido"> <br><br>
        Usuario <br>
        <input type="text" name="Usuario" required="" autocomplete="off" placeholder="Usuario"> <br><br>
        Password <br>
        <input type="password" name="Contrasena" required="" autocomplete="off" placeholder="Password"> <br><br>
        <input type="submit" value="Registrar Docente">
    </form>
</body>
</html>