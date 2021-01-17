<?php
session_start();
include 'connect.php';

if (isset($_SESSION['user'])) {



$email=$_SESSION['user'];
$fet=$connection->query("SELECT * FROM user_regis WHERE email='$email'");
$fetc=mysqli_fetch_array($fet);
$id=$fetc['id'];
$pr=$_REQUEST['id'];
$ins=$connection->query("INSERT INTO cart (uid,pid) VALUES('$id','$pr')");
if ($ins){
	header("location:mycart.php");
}
else
{
	header("location:index.php");
}	


}else
{
	echo "<script>alert('Please Login First'); window.location.href='user login.php';</script>";
}


?>