<?php
session_start();

		if ($_SESSION['user']=="") {
			header('location:index.php');
		}

?>

<!DOCTYPE html>
<html>
<head>
	<title>user login form</title>
	<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="angular.min.js"></script>
<style type="text/css">
	body{
		padding: 0px;
		margin: 0px;
		height: 100%;
		background: linear-gradient(to bottom,white,rgb(66, 135, 245.5));
	}
	#particles-js{
		height: 100%;
		
	}
	.fir{
		background: linear-gradient(to right, rgb(66, 135, 245,.4)
                                                 , rgba(255,0,0,.4));
		margin-top: 150px;
		box-shadow: 0px 15px 25px grey;
		border-radius: 35px;
		position: absolute;	
		top: 0%;
 	}
 	@media only screen and (max-width: 760px){
 		.fir{
 			margin-left: 90px;
 		}
 	}
	#log{
		font-size: 45px;
		color: white;
		padding-top: 25px;
		padding-left: 25px;
		padding-right: 25px;
		font-family: Times;

	}

	#image{
		background-color: white;
		border-radius: 100px;
	}
	.st{
		
		font-weight: bolder;
		border: none;
/*		background: none;
*/		border-bottom: 2px solid red;
		border-radius: 20px;

	}
	.st:focus{
		border-top: 2px solid red;
	}
</style>
</head>
<body>
<?php
include 'header.php';
?>

		<div class="col-lg-12" id="particles-js">
			<script type="text/javascript" src="particles.js"></script>
			<script type="text/javascript" src="app.js"></script>



<div class="row" style="margin-top: -600px;">

	<div class="col-lg-9" style="background-color: white; height: 300px; border-radius: 10px; overflow-y:scroll; ">

<form action="order.php" method="get">
<table class="table table-hover"> 
	<tr>
		<td>Name</td>
		<td>Company</td>
		<td>Price</td>
		<td>Shipping Charges</td>
		<td>Action</td>
	</tr>
		<?php
		include 'connect.php';
		$email=$_SESSION['user'];
			$in=$connection->query("SELECT * FROM user_regis WHERE email='$email'");
			$inn=mysqli_fetch_array($in);
			$id=$inn['id'];
			$un=$connection->query("SELECT * FROM cart WHERE uid='$id'");
			$total="0";

			while($unn=mysqli_fetch_array($un))
			{
				$pid=$unn['pid'];
				$cartid=$unn['id'];
				$fet=$connection->query("SELECT * FROM product WHERE id='$pid'");
				$fett=mysqli_fetch_array($fet);
				?>
				<tr>
					<td><?php echo $fett['name']; ?></td>
					<td><?php echo $fett['company']; ?></td>
					<td><?php echo $fett['price after discount'];?></td>
					<td><?php echo $fett['shipping charges'];?></td>
					<td><a href="remove.php?id=<?php echo $cartid; ?>" class="btn btn-danger">Remove From Cart</a></td>
					<td><?php
					$total=$total+($fett['price after discount'] + $fett['shipping charges']); ?></td>
					<td><input type="hidden" name="pid<?php echo $fett['id']; ?>" value="<?php echo $fett['id']; ?>"></td>
				</tr>
				<?php
			}
				?>
</table>



	</div>

<div class="col-lg-3" style="background-color: white; height: 300px;">
<br>
<div class="from-group">
<label>Your Total Bill (<?php echo number_format($total); ?>)</label>
<br>
</div>
<div class="from-group">
<label>Shipping Address</label>
<textarea name="address" class="form-control" required></textarea>
</div>
<div class="from-group">
	<label>Contact on Delivery</label>
	<input type="text" name="contact" required pattern="^[5-9]{1}[0-9]{9}" class="form-control">
</div>
<div class="from-group">
	<label>Mode of payment</label><br>
	<label>Cash On Delivery</label><br>
	<input type="radio" name="cod" value="Cash on Delivery" checked>
</div>
<div class="from-group"><br>
	<input type="submit" name="order" value="Place Order" class="btn btn-danger">
</div>

</div>


</form>
<div class="row">

<div class="col-lg-4 col-lg-offset-4">
	<br>
<center>
	<div class="alert alert-danger"><h2>Total - <?php echo number_format($total); ?></h2></div>
</center>
</div>

</div>

</div>

</div>
</body>
</html>