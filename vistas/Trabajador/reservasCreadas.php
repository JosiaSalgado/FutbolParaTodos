<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/reservasCreadas.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row">

                <!-- nav -->
                <div class="col-12">
                    <ul class="nav nav-tabs mt-3 fs-5">
                        <li class="nav-item pe-3">
                            <a class="nav-link" aria-current="page" href="inicio.html">Inicio</a>
                        </li>

                        <li class="nav-item pe-3">
                            <a class="nav-link fw-bold active" href="reservasCreadas.php">Reservas Creadas</a>
                        </li>

                        <li class="nav-item pe-3">
                            <a class="nav-link  fw-bold" href="reservasConfirmadas.html">Reservas Confirmadas</a>
                        </li>

                        <li class="nav-item pe-3">
                            <a class="nav-link fw-bold" href="ReservasRechazadas.html">Reservas Rechazadas</a>
                        </li>
                    </ul>
                </div>

                <!-- filtros -->
                <div class="col-12 border border-dark bg-info mt-1 text-center d-flex justify-content-center align-items-center"
                    style="height: 10vh;">
                    <h1>>>Filtros que organizaran las reservas<<< /h1>
                </div>

                <!-- Lista de Reservas -->
                <div class="container container-reservas">     
                    <?php
                    $inc = include("../../php/db.php");
                    if($inc){
                        $consulta = "SELECT * FROM reservascreadas";
                        $resultado = mysqli_query($conexion,$consulta);
                        if($resultado){
                            while($row = $resultado->fetch_array()){
                                $cancha = $row['cancha'];
                                $fecha = $row['fecha'];
                                $hora = $row['hora'];
                                $nombre = $row['nombre'];
                                $telefono = $row['telefono'];
                                $direccion = $row['direccion'];
                                $correo = $row['correo'];
                                ?> 

                    <div class="col-12 mt-3 reservaBox border border-warning d-flex">
                        <div class="numeroCancha col-2 border-end d-flex align-items-center ">
                            <h3 class='text-center'>Numero de cancha: <?php echo $cancha ?></h3>
                        </div>

                        <div class="infoArriendo col-4 d-flex flex-column justify-content-center ">
                            <h3 class="ms-3 pt-2"><?php echo $fecha ?></h3>
                            <p class="ms-4 fs-5"><?php echo $hora ?></p>
                        </div>

                        <div class="infoArriendo col-4 d-flex flex-column justify-content-center">
                            <h4 class="fs-5 py-1 m-0 p-0"><strong>Nombre:</strong> <?php echo $nombre ?></h4>
                            <p class="m-0 py-1 datos"><strong>Telefono:</strong> <?php echo $telefono ?></p>
                            <p class="m-0 py-1 datos"><strong>Direccion:</strong> <?php echo $direccion ?></p>
                            <p class="m-0 py-1 datos"><strong>Correo:</strong> <?php echo $correo ?></p>
                        </div>

                        <div class="botones col-2 align-items-center d-flex ">
                            <button class="btn btn-success me-3 aceptar"><i class="bi bi-check-lg"></i></button>
                            <button class="btn btn-danger rechazar" ><i class="bi bi-x-lg"></i></button>
                        </div>
                    </div>
                               <?php
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../js/horaActual.js"></script>
    <script src="../../js/Trabajador/reservasCreadas.js"></script>
</body>

</html>