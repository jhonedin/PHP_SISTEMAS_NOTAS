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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">     
    <title>SISTEMA DE NOTAS</title>
    <link rel="stylesheet" href="../../styles.css">
</head>
<body> 
    <header> 
        <h1>SISTEMAS DE NOTAS </h1>
    </header>
    <nav>
        <ul class="main-nav">
            <li class="main-nav__item"><a href="../../Administradores/Pages/index.php">Administradores</a></li>
            <li class="main-nav__item"><a href="../../Docentes/Pages/index.php">Docentes</a></li>
            <li class="main-nav__item"><a href="#">Materias</a></li>
            <li class="main-nav__item"><a href="../../Estudiantes/Pages/index.php">Estudiantes</a></li>
            <li class="main-nav__item"><a href="../../Usuarios/Controladores/salir.php">Salir</a></li>
        </ul>
    </nav>   
    <h3 class="info-sesion">Usted ha iniciado sesión como: <?php echo $ModeloUsuarios->getNombre()?> - <?php echo $ModeloUsuarios->getPerfil()?> </h3>
    <main>
        <div class="modulo-presente">
            <h2>Modulo Materias</h2>
        </div>
        <div class="box-add">
            <a href="add.php" target="_blank">Registrar Materia</a>
        </div>
        <br>
        <div class="table-box">
            <table>
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
                        <div>
                            <ul class="nav-edit-delete">
                                <li class="nav-edit-delete_item-edit"><a href="edit.php?Id=<?php echo $Materia['ID_MATERIA'] ?>" target="_blank">Editar</a></li>
                                <li class="nav-edit-delete_item-delete"><a href="delete.php?Id=<?php echo $Materia['ID_MATERIA'] ?>" target="_blank">Eliminar</a></li>
                            </ul>
                        </div>
                    </td>            
                </tr>
                <?php
                    }
                }
                
                ?>
            </table>
        <div>
    <main>
    <footer>
        <h4>Powered by</h4>
        <h5>JHON EDINSON BLANDON</h5>
        <h6>2021</h6>
    </footer>
</body>
</html>