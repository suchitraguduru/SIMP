<?php
include"upload/config.php";
$id = $_POST['id'];

if(isset($_POST['submit'])){
	$file =$_FILES['image1'];

	$filename=$_FILES['image1']['name'];
	$filetmpname=$_FILES['image1']['tmp_name'];
	$filesize=$_FILES['image1']['size'];
	$filerror=$_FILES['image1']['error'];
	$filetype=$_FILES['image1']['type'];

	$fileExt =explode('.' ,$filename);
	$fileActExt = $fileExt['1'];

	$allowed =array('jpg','jpeg','png');
	if(in_array($fileActExt,$allowed)){
		if($filerror==0){
			if($filesize < 500000){

                $newimgname = uniqid('IMG',true).".".$fileActExt;
                $img_path = 'upload/'.$newimgname;
                move_uploaded_file($filetmpname, $img_path);
                //echo $newimgname;
                //echo $img_path;
                //print_r($newimgname);

                $sql = "INSERT INTO img_upload (id,image_data)  VALUES('$id','$newimgname')";
                $t=mysqli_query($con,$sql);
                if($t==1){
                	header("Location: view.php");
                }
			}else{
                 echo "file is too big";
			}

		}else{
			echo "error";
			print_r($filerror);
		}
	}else{
		echo "file format is not valid";
	}

}else{
	echo "btt";
}




?>
