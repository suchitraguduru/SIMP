<?php
//api for data call to server
  include ('db.php');
  if(isset($_GET['key'])){

    $key=mysqli_real_escape_string($con,$_GET['key']);
    $check=mysqli_query($con,"select * from companies where token='$key'");
    header('Content-Type:application/json');
    $checkRow=mysqli_fetch_assoc($check);
    if($checkRow>0){
      if($checkRow['count_api']>$checkRow['limit_api']){
        echo json_encode(['status'=>false,'msg'=>'api token deactivated']);
        die();
      }else{
        mysqli_query($con,"update companies set count_api=count_api  where token='$key'");
      }
      echo json_encode(['status'=>true,'data'=>$checkRow,'result'=>true]);

    }else{
      echo json_encode(['status'=>false,'msg'=>'invalid  api token']);
    }

}else{
    echo json_encode(['status'=>false,'msg'=>'provide api token']);
}


?>
