<html>
<head> 
    <title>SISTEMA DE NOTAS</title>
</head>
<body> 
    <h1>Editar Docente </h1>
    <form method="POST" action="../Controladores/edit.php">
        <input type="hidden" name="Id" value="">
        Nombre <br>
        <input type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre"><br><br>
        Apellido <br>
        <input type="text" name="Apellido" required="" autocomplete="off" placeholder="Apellido"> <br><br>
        Usuario <br>
        <input type="text" name="Usuario" required="" autocomplete="off" placeholder="Usuario"> <br><br>
        Password <br>
        <input type="password" name="Pasword" required="" autocomplete="off" placeholder="Pasword"> <br><br>
        Estado <br>
        <select name="Estado" required="">
            <option>Seleccione</option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select> <br><br>
        <input type="submit" value="Editar Docente">
    </form>
</body>
</html>