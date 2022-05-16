<?php
$url="https://pragathividyaniketan.com/pjc/hall_ticket.php?aadhar_number=755496151409";
$ch=curl_init($url);

curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_URL,$url);
// header('Content-Type:application/json');
$result=curl_exec($ch);
curl_close($ch);
echo $result;
// echo "<br>";
// header('Content-Type:application/json'); //printing in jason format
$result=json_decode($result,true);
print_r($result);



if(isset($result['status'])){
  if($result['status']==true){
    if(isset($result['result'])){
      if($result['result']==true){
        echo "<pre>true <br/>";
        // print_r($result['data']);
        // $chary=$result['data'];
        // print_r($chary[0]['num']);
        ?> <table>
          <tr>
            <th>name</th>
            <th>number</th>
            <th>username</th>
            <th>password</th>

            <th>status</th>
            <th>limit_api</th>
            <th>count_api</th>
            <th>token</th>
          </tr>
          <?php
          // $key=$result['data'];
          // echo "<tr>
          //
          //
          //       <td>".$key['name']."</td>
          //       <td>".$key['num']."</td>
          //       <td>".$key['username']."</td>
          //       <td>".$key['password']."</td>
          //
          //       <td>".$key['status']."</td>
          //       <td>".$key['limit_api']."</td>
          //       <td>".$key['count_api']."</td>
          //       <td>".$key['token']."</td>
          //        </tr>
          //
          // ";
          // echo $result;
          // $result=json_encode($result);
          // echo $result;
          foreach ($result['data'] as $key) {
            echo "<tr>
                  <td>".$key['name']."</td>
                  <td>".$key['num']."</td>
                  <td>".$key['username']."</td>
                  <td>".$key['password']."</td>

                  <td>".$key['status']."</td>
                  <td>".$key['limit_api']."</td>
                  <td>".$key['count_api']."</td>
                  <td>".$key['token']."</td>
                   </tr>

            ";
          }

           ?>
        </table>

        <?php

      }else{
        echo "<pre> false";
        print_r($result['msg']);


      }
    }else{
      echo "result is not set";

    }
  }else{


  }

}else{
  echo "api not working";
}




// another method to call data api file_get_contents
// $result = file_get_contents($url);
// $array = json_decode($result, true);
// var_dump($array);
 ?>

 <html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,initial-scale=10" >
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title></title>
 </head>
   <body>

   </body>
 </html>
