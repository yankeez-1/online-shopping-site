<?php
include 'connect.php';

if (isset($_POST['submit'])) {
	$email=$_POST['b'];
	$contact=$_POST['c'];
	$suggestion=$_POST['d'];

	$var=$connection->query("INSERT INTO feedback (email,contact,suggestion) values ('$email','$contact','$suggestion')");

	if ($var) {
		echo "<script>alert('thanks for your valuable suggestion');
		window.location.href='welcome.php';</script>";
	} else{
		header('location:feedback.php');
	}
}

?>