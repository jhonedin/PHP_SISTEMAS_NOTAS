<!DOCTYPE html>
<html>
<head> 
    <title>SISTEMA DE NOTAS</title>
</head>
<body> 
    <h1>Estudiantes </h1>
    <a href="add.php" target="_blank">Registrar Estudiante</a>
    <br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Documento</th>
            <th>Correo</th>
            <th>Materia</th>
            <th>Docente</th>
            <th>Promedio</th>
            <th>Fecha de Registro</th>
            <th>Acciones</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Diego</td>
            <td>Palacio</td>
            <td>42541</td>
            <td>diego@gmail.com</td>
            <td>Español</td>
            <td>Stiven Tangarife</td>
            <td>98%</td>
            <td>2019-10-26</td>
            <td>
                <a href="edit.php" target="_blank">Editar</a>
                <a href="delete.php" target="_blank">Eliminar</a>
            </td>            
        </tr>
    </table>

</body>
</html>