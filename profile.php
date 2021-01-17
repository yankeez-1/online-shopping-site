<?php

session_start();
include 'connect.php';
include 'header.php';

$email=$_SESSION['user'];

$fetch=$connection->query("SELECT * FROM user_regis WHERE email='$email'");

$fetch1=mysqli_fetch_array($fetch);

$id=$fetch1['id'];
$name=$fetch1['name'];
$email=$fetch1['email'];
$contact=$fetch1['contact'];


if (isset($_POST['update'])) {
	$id=$_POST['a'];
	$name=$_POST['b'];
	$email=$_POST['c'];
	$con=$_POST['d'];
	$upd=$connection->query("SELECT * FROM user_regis WHERE id='$id'");
	$updd=mysqli_fetch_array($upd);
	if ($updd) {
		$update=$connection->query("UPDATE user_regis SET `name`='$name',`email`='$email',`contact`='$con' WHERE id='$id'");
		if ($update) {
			echo "<script>alert('updates successfully');
		window.location.href='profile.php';</script>";
		}else
		{
			echo "no";
		}
	}
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>registration form</title>
	<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">
	body{
		/*background-color: lightblue;*/
	}
	.c{
		/*background-color: grey;*/
		/*opacity: .4;*/
		margin-top: 150px;
		border-radius: 50px
	}
	#reg{
		font-size: 30px;
		padding: 30px;
	}
</style>
</head>
<body>
<br><br><br><br><br><br><br>
<div class="col-lg-4 col-lg-offset-4">
<ul class="nav nav-tabs nav-justified">
  <li class="active"><a data-toggle="tab" href="#home">Your Profile</a></li>
  <li><a data-toggle="tab" href="#menu1">Orders</a></li>
</ul>
</div>


<div class="col-lg-10 col-lg-offset-1">
<div class="tab-content">
  <div id="home" class="tab-pane fade in active">


<div class="col-lg-10 col-lg-offset-1">
	<form action="" method="post">
				<input type="hidden" name="a" value="<?php echo $id;?>" class="form-control">
			<div class="form-group">
				<label>NAME</label>
				<input type="text" name="b" value="<?php echo $name;?>" class="form-control">
			</div>
			<div class="form-group">
				<label>EMAIL</label>
				<input type="text" name="c" value="<?php echo $email;?>" class="form-control">
			</div>
			<div class="form-group">
				<label>CONTACT NO.</label>
				<input type="text" name="d" value="<?php echo $contact;?>" class="form-control">
			</div>
			<div class="form-group" style="padding-bottom: 20px;">
				<input type="submit" name="update" value="update" class="btn btn-primary btn-lg">
			</div>

	</form>
	</div>






  </div>
  <div id="menu1" class="tab-pane fade">

<br>
<table class="table table-hover">

	<tr style="font-weight: bolder;">
		<td>Product Name</td>
		<td>Price</td>
		<td>Payment</td>
		<td>Tracking</td>
	</tr>

<?php
$ft=$connection->query("SELECT * FROM orders WHERE userid='$id'");
while ($ftt = mysqli_fetch_array($ft)) {
	$pid=$ftt['productid'];
	$fp=$connection->query("SELECT * FROM product WHERE id='$pid'");
	while($fpp=mysqli_fetch_array($fp))
	{
	?>
	<tr>
		<td><?php echo $fpp['name']; ?></td>
		<td><?php echo $fpp['price after discount']; ?></td>
		<td><?php echo $ftt['payment']; ?></td>
		<td><?php echo $ftt['status']; ?></td>
	</tr>
	<?php
	}
}

?>


</table>



  </div>
</div>

</div>











</body>
</html>


<?php
include 'footer.php';

  ?>