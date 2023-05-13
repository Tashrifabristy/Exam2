<?php
include '../inc/env.php';
$id=$_REQUEST['id'];
$query="UPDATE data SET status=0";
$response=mysqli_query($conn, $query);

$query="UPDATE data SET status=1  WHERE id='$id'";
$response=mysqli_query($conn, $query);   

   

if($response){
    header("location:../index.php");

}
?>