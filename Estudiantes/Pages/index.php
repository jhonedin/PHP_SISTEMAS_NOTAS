<?php
    /*
    Llamo la clase modelo de Usuarios para hacer uso del metodo de validar sesion
    de esta clase.
    */ 
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../Modelo/Estudiantes.php');
    $ModeloUsuarios = new Usuarios();
    $ModeloUsuarios->validateSession();

    $Modelo = new Estudiantes();

    
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
        <?php 
            if($ModeloUsuarios->getPerfil() == 'Docente'){
        ?>
        <ul class="main-nav">
            <li class="main-nav__item"><a href="#">Estudiantes</a></li>
            <li class="main-nav__item"><a href="../../Usuarios/Controladores/salir.php">Salir</a></li>
        </ul>
        <?php
            }else{
        ?>
        <ul class="main-nav">
            <li class="main-nav__item"><a href="../../Administradores/Pages/index.php">Administradores</a></li>
            <li class="main-nav__item"><a href="../../Docentes/Pages/index.php">Docentes</a></li>
            <li class="main-nav__item"><a href="../../Materias/Pages/index.php">Materias</a></li>
            <li class="main-nav__item"><a href="#">Estudiantes</a></li>
            <li class="main-nav__item"><a href="../../Usuarios/Controladores/salir.php">Salir</a></li>
        </ul>
        <?php
            }
        ?>
    </nav>
    <h3 class="info-sesion" >Usted ha iniciado sesión como: <?php echo $ModeloUsuarios->getNombre()?> - <?php echo $ModeloUsuarios->getPerfil()?> </h3>
    <main>
        <div class="modulo-presente">
            <h2>Modulo Estudiantes</h2>
        </div>
        <div class="box-add">
            <a href="add.php" target="_blank">Registrar Estudiante</a>
        </div>
        <br>
        <div class="table-box">
            <table>
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

                <?php 
                    $Estudiantes = $Modelo->get();
                    if($Estudiantes != null){ // verifico que existan estudiantes
                        foreach($Estudiantes as $Estudiante){
                ?>

                <tr>
                    <td><?php echo $Estudiante['ID_ESTUDIANTE'] ?></td>
                    <td><?php echo $Estudiante['NOMBRE'] ?></td>
                    <td><?php echo $Estudiante['APELLIDO'] ?></td>
                    <td><?php echo $Estudiante['DOCUMENTO'] ?></td>
                    <td><?php echo $Estudiante['CORREO'] ?></td>
                    <td><?php echo $Estudiante['MATERIA'] ?></td>
                    <td><?php echo $Estudiante['DOCENTE'] ?></td>
                    <td><?php echo $Estudiante['PROMEDIO'] ?></td>
                    <td><?php echo $Estudiante['FECHA_REGISTRO'] ?></td>
                    <td>
                        <div>
                            <ul class="nav-edit-delete">
                                <li class="nav-edit-delete_item-edit"><a href="#"><a href="edit.php?Id=<?php echo $Estudiante['ID_ESTUDIANTE'] ?>" target="_blank">Editar</a></a></li>
                                <li class="nav-edit-delete_item-delete"><a href="delete.php?Id=<?php echo $Estudiante['ID_ESTUDIANTE'] ?>" target="_blank">Eliminar</a></li>
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
    </main>
    <footer>
        <h4>Powered by</h4>
        <h5>JHON EDINSON BLANDON</h5>
        <h6>2021</h6>
    </footer>
</body>
</html>