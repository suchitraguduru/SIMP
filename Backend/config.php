<?php
session_start();
$username="root";
$password="";
$host="localhost";
$db_name="chary";
$conn=mysqli_connect($host,$username,$password,$db_name);
if(!$conn){
  echo "not sucess";
  die();
}else{
  //echo "success";
}
 ?>
