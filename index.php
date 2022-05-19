<?php

include_once 'includes/user.php';
include_once 'includes/user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    include_once 'vistas/Cliente/index.html';
}else if (isset($_POST['usuario']) && isset($_POST['contrasena'])){
    //echo "Validacion de Login";

    $userForm = $_POST['usuario'];
    $passForm = $_POST['contrasena'];

    if($user->userExists($userForm, $passForm)){
        //echo "usuario validado";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once 'vistas/Cliente/index.html';


    }else{
        //echo "nombre de usuario o password incorrecto";
        $errorLogin = "Nombre de Usuario y/o password es incorrecto";
        include_once 'vistas/Cliente/login.php';

    }


}else{
    include_once 'vistas/Cliente/login.php';
}

?>