<?php
    session_start();
    include_once '../Model/Connection.class.php';
    include_once '../Model/Users.class.php';

    $logar = new Users();
    $user     = addslashes($_POST['email']);
    $password = sha1(md5($_POST['password']));

    if(isset($_POST['email']) && !empty($_POST['email']) ){
        $logar->getLogin($user, $password);
    }
?>