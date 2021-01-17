<?php
session_start();
include 'connect.php';

if (isset($_POST['submit'])) {
	$email=$_POST['a'];
	$password=$_POST['b'];

	$var1=$connection->query("SELECT * FROM user_regis WHERE email='$email' && password='$password'");

	$var2=mysqli_fetch_array($var1);

	if ($var2) {
		$_SESSION['user']=$email;
		header('location:index.php');
	} else {
		echo "<script>alert('wrong id password');
		window.location.href='user login.php';</script>";
	}
}

?>