<html>

<head> 
    <title>SISTEMA DE NOTAS</title>
</head>
<body> 
    <h1>Registrar Materia </h1>
    <form method="POST" action="../Controladores/add.php">
        Nombre <br>
        <input type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre"><br><br>
        Apellido <br>
        <input type="text" name="Apellido" required="" autocomplete="off" placeholder="Apellido"> <br><br>
        Documento <br>
        <input type="text" name="Documento" required="" autocomplete="off" placeholder="Documento"> <br><br>
        Correo <br>
        <input type="email" name="Correo" required="" autocomplete="off" placeholder="Correo"> <br><br>
        Materia <br>
        <select name="Materia" required="">
            <option>Seleccione</option>
            <option value="Ingles">Ingles</option>
            <option value="Español">Español</option>
            <option value="Ciencias">Ciencias</option>
        </select> <br><br>
        Docente <br>
        <select name="Materia" required="">
            <option>Seleccione</option>
            <option>Estefania Lopez</option>
            <option>Juan River</option>
            <option>Juan Quintero</option>
        </select> <br><br>
        Promedio <br>
        <input type="number" name="Promedio" required="" autocomplete="off" placeholder="Promedio"> <br><br>
        <input type="submit" value="Registrar Estudiante">
    </form>
</body>
</html>