<?php
//api for data call to server
  include ('db.php');
  if(isset($_GET['key'])){

    $key=mysqli_real_escape_string($con,$_GET['key']);
    $check=mysqli_query($con,"select * from companies where status='$key'");
    header('Content-Type:application/json');
    while($row=mysqli_fetch_assoc($check)){
      $checkRow[]=$row;
    }

    // print_r($checkRow);

    if($checkRow>0){
      // if($checkRow['count_api']>$checkRow['limit_api']){
      //   echo json_encode(['status'=>false,'msg'=>'api token deactivated']);
      //   die();
      // }else{
      //   mysqli_query($con,"update companies set count_api=count_api  where status='$key'");
      // }

      echo json_encode(['status'=>true,'data'=>$checkRow,'result'=>true]);

    }else{
      echo json_encode(['status'=>false,'msg'=>'invalid  api token']);
    }

}else{
    echo json_encode(['status'=>false,'msg'=>'provide api token']);
}


?>
