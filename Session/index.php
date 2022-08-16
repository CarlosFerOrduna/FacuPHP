<?php

include_once 'includes/user.php';
include_once 'includes/userSession.php';

$userSession = new UserSession();
$user = new User();

if (isset($_SESSION['user'])) {

    $userSession->setCurrentUser($user);

    include_once 'vistas/home.php';
} else if (isset($_POST['username']) && isset($_POST['password'])) {

    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    if ($user->userExist($userForm, $passForm)) {

        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once 'vistas/home.php';
    } else {

        $errorLogin = "nombre y/o usuario incorrecto";
        include_once 'vistas/login.php';
    }
} else {

    include_once 'vistas/login.php';
}
?>