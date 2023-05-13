<?php
include '../inc/env.php';
$Addtodo=$_REQUEST['todo'];

$query="INSERT INTO data(input) VALUES ('$Addtodo')";
$response=mysqli_query($conn,$query);
if($response){
    header("location:../index.php");
}

?>