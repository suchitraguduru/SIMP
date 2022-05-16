<?php
session_start();
if(!isset($_SESSION['UNAME']) && !isset($_COOKIE['UNAME']  )) {
    unset($_SESSION['UNAME']);
    header('location:login.php');
    die();
}else if ($_COOKIE['UNAME']==false) {

  unset($_SESSION['UNAME']);
  header('location:login.php');
  die();
}
if(!isset($_SESSION['UNAME'])){
  $_SESSION['UNAME']=$_COOKIE['UNAME'];
}

echo "
  <div class='header'> <h1 align='center'>WELCOME ".$_SESSION['UNAME']."</h1>
  <br><p>Dashboard for students</p></div>";

// if($_COOKIE['UNAME']==true){
//   echo "cookie is there";
// }else{
//   echo "cookie is not there";
// }


 ?>
 <br>
 <br>

 <a href="logout.php" >logout</a>
