<?php
include("../../php/clientes/reservas.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/reservas.css">
    <title>Futbol para Todos - Pagina Oficial</title>
</head>

<body>
    <!-- nav -->
    <div class="container-fluid bg-dark">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand fs-3" href="#">
                        <img class="p-0" src="../../img/logo.png" alt="" width="100">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-lg-0 col-12 d-flex justify-content-evenly">
                            <li class="nav-item ms-lg-5">
                                <a class="nav-link px-4 d-flex flex-column align-items-center" aria-current="page" href="index.html">
                                    <i class="bi bi-house-door" href="#"></i>
                                    <p>Inicio</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link ps-lg-4  d-flex flex-column align-items-center" aria-current="page" href="quienes_somos.html">
                                    <i class="bi bi-building"></i>
                                    <p>Quienes somos</p>
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link px-4  d-flex flex-column align-items-center" aria-current="page" href="https://www.google.cl/maps/place/Soccer+Las+Machas/@-18.4403793,-70.2956803,16.71z/data=!4m5!3m4!1s0x915aa91a1d8b93ed:0xd01a682c999f6dc8!8m2!3d-18.4410377!4d-70.2993505">
                                    <i class="bi bi-geo-alt"></i>
                                    <p>Donde Estamos</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link px-4 active d-flex flex-column align-items-center" aria-current="page" href="#">
                                    <i class="bi bi-journal-bookmark"></i>
                                    <p>Reserva Aqui</p>
                                </a>
                            </li>

                            <li class="nav-item" id="li-final">
                                <a class="nav-link px-4  d-flex flex-column align-items-center" aria-current="page" href="#">
                                    <i class="bi bi-person-circle"></i>
                                    <p>Tu cuenta</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
            <div class="row">
                <div class="col-12 bg-dark main mt-5 text-light">
                    <div class="p-3">
                        <h1 class="text-center mb-4 p-3">Complete el fromulario para realizar la reserva</h1>

                        <form action="../../php/clientes/reservas.php" method='post'>
                            <div class="mb-4">
                                <label for="nombre" class="form-label">Nombre Completo</label>
                                <input type="text" name="nombre" class="form-control" id="nombre" required placeholder="Ingrese su nombre aqui...">
                            </div>


                            <div class="mb-4">
                                <label for="correo" class="form-label">Correo Electronico</label>
                                <input type="email" class="form-control" id="correo" name="correo" required placeholder="Ejemplo: nombre@organizacion.com">
                            </div>

                            <div class="mb-4">
                                <label for="telefono" class="form-label">Numero de telefono</label>
                                <input type="text" name="numero" class="form-control" id="telefono" required placeholder="Ejemplo: 9 1234 5678">
                            </div>

                            <div class="mb-4">
                                <label for="direccion" class="form-label">Direccion</label>
                                <input type="text" name="direccion" class="form-control" id="direccion" required placeholder="Ejemplo: Colon #4340">
                            </div>

                            <div class="mb-4">
                                <label for="cancha" class="form-label">Seleccione N° de cancha</label>
                                <select name="numero_cancha" id="cancha" class="w-100 py-2" required>
                                    <option value="" selected disabled>--Seleccione Aqui--</option>
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


                            <div class="mb-4">
                                <label for="fecha" class="form-label">Seleccione la fecha deseada</label>
                                <input type="date" name="fecha" class="form-control" id="fecha" required>
                            </div>


                            <div class="mb-4">
                                <label for="hora" class="form-label">Seleccione la hora deseada (Hora de Chile)</label>
                                <select name="hora" id="hora" class="w-100 py-2" required>
                                    <option value="" selected dir="">--Seleccione Aqui--</option>
                                    <option value="17:00">17:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="19:00">19:00</option>
                                    <option value="20:00">20:00</option>
                                    <option value="21:00">21:00</option>
                                    <option value="22:00">22:00</option>
                                    <option value="23:00">23:00</option>
                                </select>
                            </div>


                            <div class="botones pb-3">
                                <input type="submit" name='aceptar' class="btn btn-outline-primary me-2"></input>

                                <button class="btn btn-outline-danger" href="">Cancelar</button>
                            </div>
                        </form>
                    </div>
                
            </div>
        </div>
    </div>


    <footer class="bg-dark mt-5 d-flex align-items-center justify-content-center">
        <h1 class="text-light">Footer</h1>
    </footer>

    <script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>