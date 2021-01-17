<?php
session_start();

		if ($_SESSION['user']=="") {
			header('location:index.php');
		}
include 'connect.php';

if (isset($_GET['order'])) {

		$email=$_SESSION['user'];
			$in=$connection->query("SELECT * FROM user_regis WHERE email='$email'");
			$inn=mysqli_fetch_array($in);
			$id=$inn['id'];
			$un=$connection->query("SELECT * FROM cart WHERE uid='$id'");

			while($unn=mysqli_fetch_array($un))
			{

				$pi=$unn['pid'];
				$address=$_GET['address'];
				$contact=$_GET['contact'];
				$cod=$_GET['cod'];

				$ins=$connection->query("INSERT INTO `orders`(`userid`, `productid`, `address`, `contact`, `payment`) VALUES ('$id','$pi','$address','$contact','$cod')");
				if ($ins) {
		
				 $GLOBALS['something'] =$connection->query("DELETE FROM cart WHERE uid='$id' && pid='$pi'");
				}
			}

			echo $something;
			if ($something) {
				echo "yes";
			}else
			{
				echo "no";
			}

}

?>