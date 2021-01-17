<?php
session_start();
include 'connect.php';
include 'header.php';
$prid=$_REQUEST['product']; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>products</title>
	<style type="text/css">
		body{
			background-image: url(bp6.jpeg); 
     		background-size: 100% 100%
		}
	</style>
</head>
<body>
	<div style="height: 500px; width: 600px; background-color: #fafafa; margin-top: 120px; border-radius: 25px; margin-left: 5px;">



		<div style="height: 500px;">

			<?php 
				    $gt= $connection->query("SELECT * FROM product WHERE id ='$prid'");
				    $gtt=mysqli_fetch_array($gt);
				    ?>
			
			<div style="border: 2px solid #f2bdd4; height: 100px; width: 100px;">
				
				<figcaption><a data-toggle="tab" href="#img1"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($gtt['image1'] ).'" height="90" width="85" class="img-thumnail" />'; ?></a></figcaption>
			</div>

			<div style="border: 2px solid #f2bdd4; height: 100px; width: 100px; margin-top: 5px;">

				<figcaption><a data-toggle="tab" href="#img2"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($gtt['image2'] ).'" height="90" width="85" class="img-thumnail" />'; ?></a></figcaption>
			</div>

			<div style="border: 2px solid #f2bdd4; height: 100px; width: 100px; margin-top: 5px;">
				
				<figcaption><a data-toggle="tab" href="#img3"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($gtt['image3'] ).'" height="90" width="85" class="img-thumnail" />'; ?></a></figcaption>
			</div>

		</div>

		<div class="tab-content">

		<div id="img1" class="tab-pane fade in active" style="height: 500px; width: 500px; margin-top: -500px; margin-left: 100px;">

			<figcaption><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($gtt['image1'] ).'" height="500" width="400" class="img-thumnail" />'; ?></figcaption>
		</div>

		<div id="img2" class="tab-pane fade" style="height: 500px; width: 500px; margin-top: -500px; margin-left: 100px;">

			<figcaption><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($gtt['image2'] ).'" height="500" width="400" class="img-thumnail" />'; ?></figcaption>
		</div>

		<div id="img3" class="tab-pane fade" style="height: 500px; width: 500px; margin-top: -500px; margin-left: 100px;">

			<figcaption><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($gtt['image3'] ).'" height="500" width="400" class="img-thumnail" />'; ?></figcaption>
		</div>

	</div>







	<div style="height: 400px; width: 725px; margin-left: 610px; margin-top: -500px; background-color: #fafafa; border-radius: 25px;">
		
		<figcaption style="font-size: 20px; text-transform: uppercase; padding-left: 20px;"><?php echo $gtt['company']; ?></figcaption>

					<figcaption style="font-size: 18px; padding-left: 20px;"><?php echo $gtt['category']; ?></figcaption>

					<figcaption style="margin-top: -25px; margin-left: 60px; position: absolute; font-size: 18px;"><?php echo $gtt['subcategory']; ?></figcaption>

					<figcaption style="padding-left: 20px; padding-top: 5px;">&#x20a8;  <?php echo $gtt['price after discount']; ?></figcaption>

					<figcaption style="padding-left: 80px; margin-top: -20px; position: absolute;"> <strike>&#x20a8;&nbsp<?php echo $gtt['price before discount']; ?></strike></figcaption>
					
					<figcaption style="padding-left: 20px;">Available  <p style="color: red;"><?php echo $gtt['availability']; ?></p></figcaption>

					<figcaption style="padding-left: 20px; padding-bottom: 10px; margin-top: -10px;"><?php echo $gtt['discription']; ?></figcaption>

	</div>
			<div><a href="cart.php?id=<?php echo $gtt['id']; ?>" class="btn btn-danger col-lg-4" style="font-size: 25px; padding: 10px; margin-left: 850px; margin-top: 20px;">Add to cart</a></div>

</div>

</body>
</html>
<br>
<?php

include 'footer.php';

?>