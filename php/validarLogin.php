<?php
    include('db.php');

    $USERNAME = $_POST['usuario'];
    $PASSWORD = $_POST['contrasena'];


    $consulta = "SELECT * FROM admin where username = '$USERNAME' and password = '$PASSWORD'";
    $resultado = mysqli_query($conexion, $consulta);

    $filas = mysqli_num_rows($resultado);

    if($filas){
        header('location: ../vistas/home.html');
    }else{
        include('../vistas/login.php');
        ?>
            <script>alert('Error de credenciales')</script>
        <?php
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>