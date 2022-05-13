<?php
include("db.php");


if(isset($_POST['aceptar'])){
    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $numero = trim($_POST['numero']);
    $cancha = trim($_POST['numero_cancha']);
    $fecha = trim($_POST['fecha']);
    $hora = trim($_POST['hora']);
    $direccion = trim($_POST['direccion']);

    $sql = "INSERT INTO `reservascreadas`(`nombre`, `telefono`, `direccion`, `correo`, `cancha`, `fecha`, `hora`, `id`, `estado`) VALUES ('$nombre','$numero','$direccion','$correo','$cancha','$fecha','$hora','','0')";

    $resultado = mysqli_query($conexion, $sql);

    if($resultado){
       header("location: ../../vistas/Cliente/datosBancarios.html");
    }
}
?>