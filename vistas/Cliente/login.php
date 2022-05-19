<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row border d-flex justify-content-center align-items-center">
            <div class="col">
                <div class="form">

                    <form action="" method="post" class="p-3">
                        <h1 class="text-center">BIENVENIDO</h1>

                        <div class="px-3">
                            <label for="name" class="form-label">Correo</label>
                            <input type="text" class="form-control" id="name" name="usuario"
                                placeholder="Escriba su Correo aqui..." required>

                            <div class="mensajes d-flex justify-content-between">

                                <p class="ms-1 mb-0  d-block" id="nameMessage">Rellene la casilla</p>  

                                <p class="text-end" id="register"><a href='./vistas/Cliente/register.php'>¿Aun no tienes cuenta? Registrate aqui</a></p>
                            </div>
                        </div>


                        <div class="py-1 px-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control border-1" id="password" name="contrasena"
                                placeholder="Escriba su contraseña..." required>
                            <p class="p-0 mb-0 ms-1 text-danger" id="passMessage">Rellene la casilla</p>

                            <div class="botones mt-4 mb-4">
                                <button type="submit" class="btn btn-primary me-1" id="btn-submit">Ingresar</button>

                                <button type="button" class="btn btn-danger">Cancelar</button>
                            </div>

                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>

</body>

</html>