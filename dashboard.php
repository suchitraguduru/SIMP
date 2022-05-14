<?php

session_start();
if(!isset($_SESSION['CUSER']) && !isset($_COOKIE['CUSER']  )) {
    unset($_SESSION['CUSER']);
    header('location:login.php');
    die();
}else if ($_COOKIE['CUSER']==false) {

  unset($_SESSION['CUSER']);
  header('location:login.php');
  die();
}
if(!isset($_SESSION['CUSER'])){
  $_SESSION['CUSER']=$_COOKIE['CUSER'];
}


// if($_COOKIE['UNAME']==true){
//   echo "cookie is there";
// }else{
//   echo "cookie is not there";
// }


 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="files/style.css">
  </head>

  <body>
    <nav>

      <ul type="none">
        <li>Feed</li>
        <li> Problem Statements</li>
        <li>Students Profiles</li>
        <li>Investors</li>
        <li><a href="logout.php" >Logout</a></li>
      </ul>


    </nav>
    <div class='header'>
      <p>Companies dashboard</p>
       <h1 align='center'>WELCOME <?php
       echo $_SESSION['CUSER']  ?></h1>
       <br>

    </div>
    <div class="flexContent">


    <div class="items feed">
      feed

    </div>
    <div class="items ps">
ps

    </div>
    <div class="items students">

students profile
    </div>
    <div class="items investors">
invertors

    </div>
      </div>
      <div class="flexContent">
        <form class="formData"  method="post">
              <span>Problem Statement Title :</span> <input type="text" name=""  placeholder="Poblem title" value=""> <br>
              <span>Category</span>
            <select class="" name="">
              <option value="null">Select</option>
              <option value="software">Software</option>
              <option value="hardware">Hardware</option>
              <option value="other">Other</option>
            </select> <br>
            <span>Problems Description:</span>
            <textarea name="name" rows="4" cols="50" placeholder="Problem Description"></textarea> <br>
            <span>Upload any relavent problem document here</span>
            <input type="file" name=""  value=""> <br>
            <input type="submit" name="submitPs" value="Upload ps">
        </form>

      </div>


  </body>
</html>
