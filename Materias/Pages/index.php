<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../Modelo/Materias.php');
    $ModeloUsuarios = new Usuarios();
    $ModeloUsuarios->validateSessionAdministrador(); // El modulo de materias solo puede ser accedido por el administrador

    $Modelo = new Materias();
?>
<!DOCTYPE html>
<html>
<head> 
    <title>SISTEMA DE NOTAS</title>
</head>
<body> 
    <header> 
        <h1>SISTEMAS DE NOTAS </h1>
    </header>
    <nav>
        <ul>
            <li><a href="../../Administradores/Pages/index.php">Administradores</a></li>
            <li><a href="../../Docentes/Pages/index.php">Docentes</a></li>
            <li><a href="#">Materias</a></li>
            <li><a href="../../Estudiantes/Pages/index.php">Estudiantes</a></li>
            <li><a href="../../Usuarios/Controladores/salir.php">Salir</a></li>
        </ul>
    </nav>   
    <main>
        <h2>Materias</h2>
        <a href="add.php" target="_blank">Registrar Materia</a>
        <br><br>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
            <?php 
            // Traemos todas las materias que estan en la BD
            $Materias = $Modelo->get();
            // Valido que existan materias
            if($Materias != null){
                foreach($Materias as $Materia){
            ?>
            <tr>
                <td><?php echo $Materia['ID_MATERIA'] ?></td>
                <td><?php echo $Materia['MATERIA'] ?></td>
                <td>
                    <a href="edit.php?Id=<?php echo $Materia['ID_MATERIA'] ?>" target="_blank">Editar</a>
                    <a href="delete.php?Id=<?php echo $Materia['ID_MATERIA'] ?>" target="_blank">Eliminar</a>
                </td>            
            </tr>
            <?php
                }
            }
            
            ?>
        </table>
    <main>
    <footer>
        <h4>Espacio para el pie de pagina</h4>
    </footer>
</body>
</html>