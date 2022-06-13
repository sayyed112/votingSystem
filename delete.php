<?php 
include_once 'config.php';
$id = $_GET['id'];
$sql="DELETE FROM `profiles` WHERE `id` = '$id'";
mysqli_query($conn,$sql);
// echo "Your file was uploaded successfully.";
header("Location: display.php");
?>