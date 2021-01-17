<!DOCTYPE html>
<html>
<head>
	<title>user login form</title>
	<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">
	body{
		padding: 0px;
		margin: 0px;
		height: 654px;
		background: linear-gradient(to right, rgba(255,0,0,.5),rgb(66, 135, 245.5));
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
		<div class="col-lg-12" id="particles-js">
			<script type="text/javascript" src="particles.js"></script>
			<script type="text/javascript" src="app.js"></script>




	<div class="col-lg-4 col-lg-offset-4 fir">
		<form action="user loginphp.php" method="post">
		<div class="col-lg-4 col-lg-offset-3 col-xs-6 col-xs-offset-1">
			<label id="log" style="padding-bottom: 5px;">Login</label>
		</div>

	


		<div class="col-lg-4 col-lg-offset-4">
			<div class="col-lg-11 col-xs-6 col-xs-offset-3 col-lg-offset-1" id="image">
				<img src="home.ico" style="height: 70px;">
			</div>
		</div>
		
		<div class="col-lg-12 col-xs-12"><br></div>	

		<div class="form-group col-lg-8 col-lg-offset-2">
			<input type="text" name="a" placeholder="email" class="form-control st" required>
		</div>
		

		<div class="form-group col-lg-8 col-lg-offset-2">
			<input type="password" name="b" placeholder="password" class="form-control st" required>
		</div>

	

		<div class="form-group col-lg-4 col-lg-offset-4 col-xs-4 col-xs-offset-3" style="padding: 10px;">
			<input type="submit" name="submit" value="Login" class="btn btn-primary btn-lg" style="padding-left: 20px;padding-right: 20px; border-radius: 25px;">
		</div>
		</form>
	</div>

</div>
</body>
</html>