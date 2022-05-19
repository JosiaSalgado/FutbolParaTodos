<?php
    include('../db.php');

    $id=$_GET['id'];

        $sql = "UPDATE reservascreadas set estado = '2' where id = '$id'";
        $result = mysqli_query($conexion, $sql);
  
    
    

    if($result){
        Header('Location: ../../vistas/Trabajador/reservasCreadas.php');
    }





?>