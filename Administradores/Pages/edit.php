<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../Modelo/Administradores.php');
    $ModeloUsuarios = new Usuarios();
    $ModeloUsuarios->validateSession();

    $ModeloAdministradores = new Administradores();
    $Id = $_GET['Id'];
    $Administrador = $ModeloAdministradores->getById($Id);
?>
<html>
<head> 
    <title>SISTEMA DE NOTAS</title>
</head>
<body> 
    <h1>Editar Administrador </h1>
    <form method="POST" action="../Controladores/edit.php">
        <?php
            //valido que exista el administrador
            if($Administrador != null){
                foreach($Administrador as $Info){

                
        ?>
        <input type="hidden" name="Id" value="<?php echo $Id?>">
        Nombre <br>
        <input type="text" name="Nombre" required="" autocomplete="off" placeholder="Nombre"
        value="<?php echo $Info['NOMBRE']?>"><br><br>
        Apellido <br>
        <input type="text" name="Apellido" required="" autocomplete="off" placeholder="Apellido"
        value="<?php echo $Info['APELLIDO']?>"> <br><br>
        Usuario <br>
        <input type="text" name="Usuario" required="" autocomplete="off" placeholder="Usuario"
        value="<?php echo $Info['USUARIO']?>"> <br><br>
        Password <br>
        <input type="password" name="Pasword" required="" autocomplete="off" placeholder="Pasword"
        value="<?php echo $Info['CONTRASENA']?>"> <br><br>
        Estado <br>
        <select name="Estado" required="">
            <option value="<?php echo $Info['ESTADO']?>"><?php echo $Info['ESTADO']?></option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select> <br><br>
        <?php 
                }
            }
        ?>
        <input type="submit" value="Editar Administrador">
    </form>
</body>
</html>