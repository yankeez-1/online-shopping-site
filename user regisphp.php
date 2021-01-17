<?php
include 'connect.php';

if (isset($_POST['submit'])) {
	$name=$_POST['a'];
	$email=$_POST['b'];
	$contact=$_POST['c'];
	$password=$_POST['d'];


	$var=$connection->query("INSERT INTO user_regis (name,email,contact,password) values ('$name','$email','$contact','$password')");

	if ($var) {
		echo "<script>alert('thanku for the registration');
		window.location.href='user login.php';</script>";
	} else{
		header('location:user regis.php');
	}
}

?>