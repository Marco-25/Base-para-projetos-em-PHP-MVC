<?php
    session_start();
    include_once '../Model/Connection.class.php';
    include_once '../Model/Users.class.php';

    $user = new Users();
    $user->Logout();
    header("Location: ../public/login.php?session_ending_success");
?>