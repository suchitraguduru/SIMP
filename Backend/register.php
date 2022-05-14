<?php
include 'api/db.php';
if(isset($_SESSION['CUSER']) || isset($_COOKIE['CUSER'])){
  header('location:dashboard.php');
  die();
}
if(isset($_POST['submit'])){
  $cname=$_POST['cname'];
  $cnum=$_POST['cnum'];
  $cuser=$_POST['cuser'];
  $cpass=$_POST['cpass'];
  $cquery="INSERT INTO companies (name,num,username,password) VALUES ('$cname','$cnum','$cuser','$cpass')";
  $cres=mysqli_query($con,$cquery);
  if($cres){
    echo "registered successfullt";
    //setting cookie and session_start
    $_SESSION['CUSER']=$cuser;// user is var from db
    setcookie('CUSER',$cuser,time()+60*60*1);// for 1 hr login
    header('location:dashboard.php');
    die();
  }else{
    echo "<font color='red' >invalid  company login</font>";
  }
}



 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reg</title>
  </head>
  <style media="screen">
  body{
    background-color:#9baaa2;
  }
    .logbox{
      width:100%;
      height:300px;
      border-radius: 10px;
      border-color: 50px solid red;
      text-align: center;

    }
    .inputs{
      justify-content: center;
      align-items: center;
      display: flex;
      flex-direction: column;

    }
    input{
      max-width:180px;
      height: 30px;
      margin:10px;
      text-align: center;

    }
    input[type="submit"]{
      width:200px;
      border:0px;
      height:40px;
      font-size: 20px;
      background-color: #2587da;
      border-radius: 10px;
      color:white;
    }
  </style>
  <body>
    <div class="logbox">
      <h2>Companies registration</h2>
      <form class=""  method="POST">
          <div class="inputs">



        <input type="text" name="cname" placeholder="Name" value="">
        <input type="tel" name="cnum" placeholder="Mobile" value="">
        <input type="text" name="cuser" placeholder="set Username" value="">

        <input type="password" name="cpass" placeholder="Set Password" value="">
        <input type="password" name="cpass1" placeholder="Confirm Password" value="">
      <input type="submit" name="submit" value="Register">
      </div>
        </form>
    </div>



  </body>
</html>
