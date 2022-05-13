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
                <div class="formulario col-12 border border-dark bg-info d-flex justify-content-evenly align-items-center"
                    style="height: 10vh;">

                    <div class="col-5">
                        <label for="canchaSlc" class="text-light"><strong>Numero de cancha</strong></label>
                        <select id="canchaSlc">
                            <option value="" disabled selected>Seleccione</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>

                    <div class="col-5">
                        <label for="horaScl" class="text-light"><strong>Horario</strong></label>
                        <select id="horaSlc">
                            <option value="" disabled selected>Seleccione</option>
                            <option value="17">17:00</option>
                            <option value="18">18:00</option>
                            <option value="19">19:00</option>
                            <option value="20">20:00</option>
                            <option value="21">21:00</option>
                            <option value="22">22:00</option>
                            <option value="23">23:00</option>
                        </select>
                    </div>

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

                    <div class="col-12 mt-3 reservaBox border border-warning d-flex d-none">
                        <div class="numeroCancha col-2 border-end d-flex align-items-center ">
                            <h3 class='text-center cancha'>Numero de cancha: <span><?php echo $cancha?></span></h3>
                        </div>

                        <div class="infoArriendo col-4 d-flex flex-column justify-content-center">
                            <h3 class="ms-3 fecha">
                               <span><?php echo $fecha ?></span>
                            </h3>
                            <p class="ms-4 fs-5 mb-3 hora">
                                <span><?php echo $hora?></span>
                            </p>
                        </div>

                        <div class="infoArriendo col-4">
                            <div class='mt-3'>
                                <h4 class="py-1 mt-1 mb-0 p-0 nombre"><strong>Nombre: </strong><span><?php echo $nombre?></span></h4>
                                <p class="m-0 py-1 datos telefono"><strong>Telefono: </strong><span><?php echo $telefono?></span></p>
                                <p class="m-0 py-1 datos direccion"><strong>Direccion: </strong><span><?php echo $direccion?></span></p>
                                <p class="m-0 py-1 datos correo "><strong>Correo: </strong><span><?php echo $correo?></span></p>
                            </div>
                        </div>

                        <div class="botones col-2 align-items-center d-flex ">
                            <button class="btn btn-success me-3 aceptar"><i class="bi bi-check-lg"></i></button>
                            <button class="btn btn-danger rechazar"><i class="bi bi-x-lg"></i></button>
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