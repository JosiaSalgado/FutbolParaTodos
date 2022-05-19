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

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row">

                <!-- nav -->
                <div class="col-12">
                    <ul class="nav nav-tabs mt-3 fs-5">
                        <li class="nav-item pe-3">
                            <a class="nav-link" aria-current="page" href="index.html">Inicio</a>
                        </li>

                        <li class="nav-item pe-3">
                            <a class="nav-link fw-bold" href="reservasCreadas.php">Reservas Creadas</a>
                        </li>

                        <li class="nav-item pe-3">
                            <a class="nav-link  fw-bold active" href="reservasConfirmadas.php">Reservas Confirmadas</a>
                        </li>

                        <li class="nav-item pe-3">
                            <a class="nav-link fw-bold" href="ReservasRechazadas.php">Reservas Rechazadas</a>
                        </li>

                        <li class="nav-item pe-3">
                            <a class="nav-link fw-bold" href="historialReservas.php">Historial de Reservas</a>
                        </li>

                        <li class="nav-item pe-3">
                            <a class="nav-link fw-bold" href="administrarTrabajadores.php">Administrar Trabajadores</a>
                        </li>
                    </ul>
                </div>

                <!-- filtros -->
                <div class="contaniner border-dark bg-info mt-3">
                    <div class="row formulario col-12 text-center">
                        <div class="col-6 pt-3">
                            <label for="canchaSlc" class="text-light"><strong>Numero de cancha</strong></label>
                            <select id="canchaSlc">
                                <option value="" disabled selected>Seleccione</option>
                                <option value="">Todas las Canchas</option>
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

                        <div class="col-6 pt-3">
                            <label for="horaScl" class="text-light"><strong>Horario</strong></label>
                            <select id="horaSlc">
                                <option value="" disabled selected>Seleccione</option>
                                <option value="">Todos los Horarios</option>
                                <option value="17:00">17:00</option>
                                <option value="18:00">18:00</option>
                                <option value="19:00">19:00</option>
                                <option value="20:00">20:00</option>
                                <option value="21:00">21:00</option>
                                <option value="22:00">22:00</option>
                                <option value="23:00">23:00</option>
                            </select>
                        </div>



                        <div class="col-6 py-3">
                            <label for="fechaSlc" class="text-light"><strong>Fecha</strong></label>
                            <input type="date" id='fechaSlc' style="width: 100%;">
                        </div>


                        <div class="col-6 py-3">
                            <label for="" class="text-light"><strong>Pronto...</strong></label>
                            <select id="horaSlc">
                                <option value="" disabled selected>Seleccione</option>
                            </select>
                        </div>

                    </div>
                </div>

                <!-- Lista de Reservas -->
                <div class="container container-reservas">
                    <?php
                    $inc = include("../../php/db.php");
                    if ($inc) {
                        $consulta = "SELECT * FROM reservascreadas where estado = '1'";
                        $resultado = mysqli_query($conexion, $consulta);
                        if ($resultado) {
                            while ($row = $resultado->fetch_array()) {
                                $cancha = $row['cancha'];
                                $fecha = $row['fecha'];
                                $hora = $row['hora'];
                                $nombre = $row['nombre'];
                                $telefono = $row['telefono'];
                                $direccion = $row['direccion'];
                                $correo = $row['correo'];
                                $id = $row['id'];
                    ?>

                                <div class="col-12 mt-3 reservaBox border border-success d-flex">
                                    <div class="numeroCancha col-2 border-end d-flex align-items-center ">
                                        <h3 class='text-center cancha'>Numero de cancha: <span><?php echo $cancha ?></span></h3>
                                    </div>

                                    <div class="infoArriendo col-4 d-flex flex-column justify-content-center">
                                        <h3 class="ms-3 fecha">
                                            <span><?php echo $fecha ?></span>
                                        </h3>
                                        <p class="ms-4 fs-5 mb-3 hora">
                                            <span><?php echo $hora ?></span>
                                        </p>
                                    </div>

                                    <div class="infoArriendo col-4">
                                        <div class='mt-3'>
                                            <h4 class="py-1 mt-1 mb-0 p-0 nombre"><strong>Nombre: </strong><span><?php echo $nombre ?></span></h4>
                                            <p class="m-0 py-1 datos telefono"><strong>Telefono: </strong><span><?php echo $telefono ?></span></p>
                                            <p class="m-0 py-1 datos direccion"><strong>Direccion: </strong><span><?php echo $direccion ?></span></p>
                                            <p class="m-0 py-1 datos correo "><strong>Correo: </strong><span><?php echo $correo ?></span></p>
                                            <p class="m-0 py-1 datos id d-none"><strong>id: </strong><span><?php echo $id ?></span></p>
                                        </div>
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
    <script src="../../js/Trabajador/filtroReservas.js"></script>
</body>

</html>