
<!DOCTYPE html>
<html>
<head>
	<title>view</title>
</head>
<body>
<form method="post" >
	<input type="number" name="id">
<button type="submit" name="submit">preview</button>


</form>





<?php
include "upload/config.php";

 if(isset($_POST['submit'])){
 	$id= $_POST['id'];
 	//echo $id;
 	$query = "SELECT image_data FROM img_upload WHERE id = '$id' ";
 	$result=mysqli_query($con,$query);

 	$data =mysqli_fetch_array($result);
	if(isset($data['0'])){
		$imgname = $data['0'];
	}

}
 	?>
    <img src="upload/<?=$imgname  ?>" />

 </body>
</html>
