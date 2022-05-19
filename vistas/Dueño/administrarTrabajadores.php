<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/reservasCreadas.css">
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
                            <a class="nav-link" aria-current="page" href="index.html">Inicio</a>
                        </li>

                        <li class="nav-item pe-3">
                            <a class="nav-link fw-bold" href="reservasCreadas.php">Reservas Creadas</a>
                        </li>

                        <li class="nav-item pe-3">
                            <a class="nav-link  fw-bold" href="reservasConfirmadas.php">Reservas Confirmadas</a>
                        </li>

                        <li class="nav-item pe-3">
                            <a class="nav-link fw-bold" href="ReservasRechazadas.php">Reservas Rechazadas</a>
                        </li>

                        <li class="nav-item pe-3">
                            <a class="nav-link fw-bold" href="historialReservas.php">Historial de Reservas</a>
                        </li>

                        <li class="nav-item pe-3">
                            <a class="nav-link fw-bold active" href="administrarTrabajadores.php">Administrar Trabajadores</a>
                        </li>

                        

                    </ul>
                </div>

                
                <div class="col main text-center pt-5">
                    <h1><strong>BIENVENIDO Don (Nombre del Dueño)</strong></h1>
                    <h3 id="horaActual" class="fs-1 text-danger"></h3>
                </div>
            </div>
        </div>
    </div>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../js/horaActual.js"></script>
</body>

</html>