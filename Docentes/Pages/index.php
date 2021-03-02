<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../Modelo/Docentes.php');
    $ModeloUsuarios = new Usuarios();
    $ModeloUsuarios->validateSession();

    $ModeloDocentes = new Docentes();
?>
<!DOCTYPE html>
<html>
<head> 
    <title>SISTEMA DE NOTAS</title>
</head>
<body> 
    <h1>Docentes </h1>
    <a href="add.php" target="_blank">Registrar Docente</a>
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
            $Docentes = $ModeloDocentes->get();
            // Validamos que existan Docentes
            if($Docentes != null){
                foreach($Docentes as $Docente){

        ?>
        <tr>
            <td><?php echo $Docente['ID_USUARIO'] ?></td>
            <td><?php echo $Docente['NOMBRE'] ?></td>
            <td><?php echo $Docente['APELLIDO'] ?></td>
            <td><?php echo $Docente['USUARIO'] ?></td>
            <td><?php echo $Docente['PERFIL'] ?></td>
            <td><?php echo $Docente['ESTADO'] ?></td>
            <td>
                <a href="edit.php?Id=<?php echo $Docente['ID_USUARIO'] ?>" target="_blank">Editar</a>
                <a href="delete.php?Id=<?php echo $Docente['ID_USUARIO'] ?>" target="_blank">Eliminar</a>
            </td>   
        </tr>
        <?php 
                }
            }
        ?>
    </table>
   

</body>
</html>