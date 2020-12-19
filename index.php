<html>
<title>SISTEMA DE NOTAS</title>
<head> 

</head>
<body> 
    <h1>Inicio de Sesión </h1>
    <form method="POST" action="Usuarios/Controladores/Login.php">
    Usuario: <br>
    <input type="text" name="Usuario" required="" autocomplete="off" placeholder="Usuario"> 
    <br><br>
    Contrasena: <br>
    <input type="password" name="Contrasena" required="" autocomplete="off" placeholder="Contraseña">
    <br><br>
    <input type="submit" value="Inicia Sesion">
    </form>
</body>
</html>