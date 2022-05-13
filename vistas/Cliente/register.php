<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/register.css">
    <title>Crear cuenta de usuario</title>
</head>

<body>
    <div class="container">
        <div class="row">

            <div class="col row-1 d-flex justify-content-center justify-content-lg-start align-items-center">
                <div class="col-12 col-lg-6 box p-4">
                    <h1 class="text-center">Cree su cuenta de usuario</h1>

                    <form action="../../php/clientes/registrarUsuarios.php" method='POST' class="row">
                        <div class="mb-4">
                            <label for="nombre" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="nombre" name='nombre' required placeholder="Ingrese su nombre aqui...">
                        </div>

                        <div class="mb-4">
                            <label for="pass" class="form-label">Fecha de nacimineto</label>
                            <input type="date" class="form-control" name='nacimiento' id="pass" required  min="1920-01-01">
                        </div>

                        <div class="mb-4">
                            <label for="correo" class="form-label">Correo Electronico</label>
                            <input type="email" class="form-control" name='correo' id="correo" required placeholder="Ejemplo: nombre@organizacion.com">
                        </div>

                        <div class="mb-4">
                            <label for="telefono" class="form-label">Numero de telefono</label>
                            <input type="text" class="form-control" name='telefono' id="telefono" required placeholder="Ejemplo: 9 1234 5678">
                        </div>

                        <div class="mb-4">
                            <label for="pass" class="form-label">Contraseña</label>
                            <input type="text" class="form-control" name='password' id="pass" required placeholder="Cree una contraseña e ingresela aqui...">
                        </div>

                        <div class="botones">
                            <input type="submit" class="btn btn-success" name='aceptar'></input>

                            <a class="btn btn-danger" href="./login.php">Cancelar</a>

                           
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>