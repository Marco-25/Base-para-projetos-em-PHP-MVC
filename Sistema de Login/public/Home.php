<?php
//verificação
    session_start();
    if(isset($_SESSION['login'])){
?>
<!-- --------------------------------------------------------------- -->
<?php require_once '../View/Base/header.inc.php';//header?>

<?php require_once '../View/Base/nav.inc.php';//navBar?>

<?php require_once '../View/geral/viewHome.php';//form home?>

<?php require_once '../View/Base/footer.inc.php';//footer?>

<?php ?>
<!-- --------------------------------------------------------------- -->
<?php
//fim da verificação
}else{
    echo "<script> alert('Login ou senha Inavlidos.');</script>";
    echo "<script> window.location.href = '../public/login.php';</script>";
    exit;
}
?>