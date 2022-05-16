
<?php
    session_start();
    setcookie('CUSER',$cuser,60);
    unset($_SESSION['CUSER']);
    header('location:login.php');
    die();

?>
