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
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body> 
    <header>
        <h1>SISTEMAS DE NOTAS</h1>
    </header>
    <main>
        
        <div class="login-box">
            <h2>Inicio de Sesión</h2>
            <form  class="login" method="POST" action="Usuarios/Controladores/Login.php">
                <label for="nombre">
                    <span>Usuario: </span>
                    <input type="text" name="Usuario" required="" autocomplete="off" placeholder="Usuario"> 
                </label>
                
                <label for="contrasena">
                    <span>Contrasena:</span> 
                    <input type="password" name="Contrasena" required="" autocomplete="off" placeholder="Contraseña">
                </label>
                <input type="submit" value="Inicia Sesion">
            </form>
        </div>
    </main>
    <footer>
        <h4>Powered by</h4>
        <h5>JHON EDINSON BLANDON</h5>
        <h6>2021</h6>
    </footer>
</body>
</html>