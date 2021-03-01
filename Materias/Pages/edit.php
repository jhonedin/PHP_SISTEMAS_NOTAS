<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');
    require_once('../Modelo/Materias.php');
    $ModeloUsuarios = new Usuarios();
    $ModeloUsuarios->validateSession();

    $Modelo = new Materias();
    $Id = $_GET['Id'];
    $InformacionMateria = $Modelo->getById($Id);
?>

<html>
<head> 
    <title>SISTEMA DE NOTAS</title>
</head>
<body> 
    <h1>Editar Materia </h1>
    <form method="POST" action="../Controladores/add.php">
        <input type="hidden" name="Id" value="<?php echo $Id?>">
        <?php 
            if($InformacionMateria != null){
                foreach($InformacionMateria as $Info){
        ?>
        Nombre <br>
        <input type="text" name="Nombre" required="" autocomplete="off" placeholder="Editar Materia"
         value="<?php echo $Info['MATERIA'] ?>" ><br><br>
         <?php 
                }
            }
         ?>
        <input type="submit" value="Editar Materia">
    </form>
</body>
</html>