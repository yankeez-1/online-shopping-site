<?php
session_start();
include 'connect.php';
include 'header.php';
$prid=$_REQUEST['id'];



?>

<!DOCTYPE html>
<html>
<head>
	<title>yankeez-men jacket</title>
	<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">
	body{
		background-color: #dedfe0;
		 background-image: url(bp6.jpeg); 
      background-size: 100% 100%;
	}
	.full{
		margin-top: 120px;
	}

	.row1{
		width: 250px;
		border-radius: 15px;
		float: left;
		margin-left: 14px;
		margin-bottom: 10px;
		overflow: hidden;
	}
	img{
		width: 100%;
		height: 230px;	
		transition: 0.8s;
	}
	img:hover{
		transform: scale(1.1);
		transition: 0.8s;
	}	
	figcaption{
		color: black;
	}
</style>
</head>
<body>
	<!-- <div class="filter">
		
	</div> -->


	<div class="full">
		<?php 
				    $gt= $connection->query("SELECT * FROM product WHERE subcategory='$prid'");
				    while($gtt=mysqli_fetch_array($gt)){
				    ?>
		<div class="row1">
			<a href="showproducts.php?product=<?php echo $gtt['id'];?>" style="text-decoration: none;"><div style="background-color: #fafafa; margin: 0px; padding: 0px;">

					<figcaption><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($gtt['image1'] ).'" height="350" class="img-thumnail" />'; ?></figcaption>
		
					<br>
					<figcaption style="font-size: 20px; text-transform: uppercase; padding-left: 20px;"><?php echo $gtt['company']; ?></figcaption>



					<figcaption style="padding-left: 20px; padding-top: 5px;">&#x20a8;  <?php echo $gtt['price after discount']; ?></figcaption>

					<figcaption style="padding-left: 80px; margin-top: -20px; position: absolute;"><strike>&#x20a8;  <?php echo $gtt['price before discount']; ?></strike></figcaption>
					
					<figcaption style="padding-left: 20px;">Available  <p style="color: red;"><?php echo $gtt['availability']; ?></p></figcaption>

					<figcaption style="padding-left: 20px; padding-bottom: 10px; margin-top: -10px;"><?php echo $gtt['discription']; ?></figcaption>
				</a>
				</div>
	</div>
	 <?php 
		}
	  ?>
</div>
</body>
</html>

<?php
include 'footer.php';

?>