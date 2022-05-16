<?php
include "db.php";
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// sql code to create table
$sql = "CREATE TABLE employees(
        id INT(5)  PRIMARY KEY, 
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50)
        )";

if ($con->query($sql) === TRUE) {
    echo "Table employees created successfully";
    $id=1;
    $fn='abcd';
    $ln='xyz';
    $email='abcd@gmail.com';
    for ($i=0; $i <10; $i++) { 
        $query="INSERT INTO employees (id,firstname,lastname,email) VALUES ('$id','$fn','$ln','$email')";
        
        if(mysqli_query($con,$query)){
            echo "<br/>set ".$id;
        }else{
            echo "breaked";
            break;
        }
        $id++;
    }
} else {
    echo "Error creating table: " . $con->error;
}

$con->close();
?>