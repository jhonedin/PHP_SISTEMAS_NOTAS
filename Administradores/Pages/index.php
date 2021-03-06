<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../Modelo/Administradores.php');
    $ModeloUsuarios = new Usuarios();
    $ModeloUsuarios->validateSessionAdministrador();

    $ModeloAdministradores = new Administradores();
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
            <li><a href="#">Administradores</a></li>
            <li><a href="../../Docentes/Pages/index.php">Docentes</a></li>
            <li><a href="../../Materias/Pages/index.php">Materias</a></li>
            <li><a href="../../Estudiantes/Pages/index.php">Estudiantes</a></li>
            <li><a href="../../Usuarios/Controladores/salir.php">Salir</a></li>
        </ul>
    </nav>
    <h3>Usted ha iniciado sesión como: <?php echo $ModeloUsuarios->getNombre()?> - <?php echo $ModeloUsuarios->getPerfil()?> </h3>
    <main>
        <h2>Administradores </h2>
        <a href="add.php" target="_blank">Registrar Administrador</a>
        <br><br>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Usuario</th>
                <th>Perfil</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
            <?php 
                $Administradores = $ModeloAdministradores->get();
                // Validamos que existan administradores
                if($Administradores != null){
                    foreach($Administradores as $Administrador){

            ?>
            <tr>
                <td><?php echo $Administrador['ID_USUARIO'] ?></td>
                <td><?php echo $Administrador['NOMBRE'] ?></td>
                <td><?php echo $Administrador['APELLIDO'] ?></td>
                <td><?php echo $Administrador['USUARIO'] ?></td>
                <td><?php echo $Administrador['PERFIL'] ?></td>
                <td><?php echo $Administrador['ESTADO'] ?></td>
                <td>
                    <a href="edit.php?Id=<?php echo $Administrador['ID_USUARIO'] ?>" target="_blank">Editar</a>
                    <a href="delete.php?Id=<?php echo $Administrador['ID_USUARIO'] ?>" target="_blank">Eliminar</a>
                </td>   
            </tr>
            <?php 
                    }
                }
            ?>
        </table>
    </main>
    <footer>
        <h4>Espacio para el pie de pagina</h4>
    </footer>

</body>
</html>