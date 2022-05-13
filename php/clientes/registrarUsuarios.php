<?php
   include('db.php');

  
    if(isset($_POST['aceptar'])){
        $nombre = trim($_POST['nombre']);
        $nacimiento = trim($_POST['nacimiento']);
        $correo = trim($_POST['correo']);
        $telefono = trim($_POST['telefono']);
        $password = trim($_POST['password']);

        $consulta = "INSERT INTO `clientes`(`nombre`, `correo`, `telefono`, `nacimiento`, `password`) VALUES ('$nombre','$correo','$telefono','$nacimiento','$password')";

        $resultado = mysqli_query($conexion, $consulta) or die ('Error: '. mysqli_error($conexion));

        include('../../vistas/Cliente/login.php');
        
    }
?>