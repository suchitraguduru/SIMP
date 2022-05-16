
<?php
    session_start();
    setcookie('UNAME',$row['user'],60);
    unset($_SESSION['UNAME']);
    header('location:login.php');
    die();

?>
