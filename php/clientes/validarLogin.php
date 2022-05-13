<?php
    include('db.php');
    $mensaje = 'Error';

    $USERNAME = $_POST['usuario'];
    $PASSWORD = $_POST['contrasena'];


    $consulta = "SELECT * FROM clientes where correo = '$USERNAME' and password = '$PASSWORD'";
    $resultado = mysqli_query($conexion, $consulta);

    $filas = mysqli_num_rows($resultado);

    if($filas){
        header('location: ../../vistas/Cliente/index.html');
    }else{
        

        header('location: ../../vistas/Cliente/login.php'); 
        
        
        
       
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>