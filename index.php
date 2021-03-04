<html>
<head> 
    <title>SISTEMA DE NOTAS</title>
</head>
<body> 
    <header>
    <h1>SISTEMAS DE NOTAS</h1>
    </header>
    <main>
        <h2>Inicio de Sesion</h2>
        <form method="POST" action="Usuarios/Controladores/Login.php">
        Usuario: <br>
        <input type="text" name="Usuario" required="" autocomplete="off" placeholder="Usuario"> 
        <br><br>
        Contrasena: <br>
        <input type="password" name="Contrasena" required="" autocomplete="off" placeholder="Contraseña">
        <br><br>
        <input type="submit" value="Inicia Sesion">
        </form>
    </main>
    <footer>
        <h4>Espacio para el pie de pagina</h4>
    </footer>
</body>
</html>