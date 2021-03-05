<?php
 require_once('../Modelo/Usuarios.php');

 $ModeloUsuarios = new Usuarios();

 //Llamo el metodo de cerrar la sesion y salir
 $ModeloUsuarios->salir();
?>