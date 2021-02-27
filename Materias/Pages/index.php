<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../Modelo/Materias.php');
    $ModeloUsuarios = new Usuarios();
    $ModeloUsuarios->validateSession();

    $Modelo = new Materias();
?>
<!DOCTYPE html>
<html>
<head> 
    <title>SISTEMA DE NOTAS</title>
</head>
<body> 
    <h1>Materias </h1>
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

</body>
</html>