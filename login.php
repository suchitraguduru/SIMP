<?php
include 'config.php';
if(isset($_SESSION['UNAME']) || isset($_COOKIE['UNAME'])){
  header('location:dashboard.php');
  die();
}
if(isset($_POST['sub'])){
  $user=$_POST['user'];
  $pass=$_POST['pass'];
  $query="SELECT * FROM userinfo where user='$user' and pass='$pass'";
  $res=mysqli_query($conn,$query);
  if(mysqli_num_rows($res)>0){
    $row=mysqli_fetch_assoc($res);
    //echo "welcome".$data['user'];
    $_SESSION['UNAME']=$row['user'];
    setcookie('UNAME',$row['user'],time()+60*60*24);
    header('location:dashboard.php');
    die();

  }else{
    echo "<font color='red' >invalid login</font>";
  }
}else{
  //echo "please click login";
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=10" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
  </head>
  <style>
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
      <h2>student Login</h2>
      <form class=""  method="POST">
          <div class="inputs">



        <input type="text" name="user" placeholder="Username" value="">


        <input type="password" name="pass" placeholder="Password" value="">
      <input type="submit" name="sub" value="Login">
      </div>
        </form>
    </div>


    <script type="text/javascript">

    </script>
  </body>
</html>
