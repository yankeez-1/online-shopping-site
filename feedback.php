<?php

include 'header.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>user registration form</title>
	<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="angular.min.js"></script>

<!-- <style type="text/css">
		
	.fir{
		background: linear-gradient(to right, rgb(66, 135, 245,.4)
                                                 , rgba(255,0,0,.4));
		margin-top: -400px;
		box-shadow: 10px 25px 55px grey;
		border-radius: 35px;
		position: absolute;	
		top: -90px;
	}

	#log{
		font-size: 40px;
		color: white;
		padding-top: 25px;
		padding-left: 25px;
		padding-right: 25px;
		font-family: Times;

	}
	.st{
		
		font-weight: bolder;
		border: none;
	border-bottom: 2px solid red;
		border-radius: 20px;

	}
	.st:focus{
		border-top: 2px solid red;
	}
</style> -->
</head>
<body ng-app="">
	<div style="margin-top: 120px;">
	<form name="myForm" action="suggestionphp.php" method="post">
		<div class="col-lg-4 col-lg-offset-5 col-xs-6 col-xs-offset-4">
			<label id="log" style="font-size: 50px; color: #f2bdd4">Feedback</label>
		</div>

		
		<div class="col-lg-12 col-xs-12"><br></div>	

		
		<div class="form-group col-lg-8 col-lg-offset-2">
			<input type="email" name="b" ng-model="b" required placeholder="Email" class="form-control st">

			<div class="alert alert-danger" ng-show="myForm.b.$touched && myForm.b.$invalid">
				<span ng-show="myForm.b.$error.required">Email is required.</span>
				<span ng-show="myForm.b.$error.email">Invalid email address.</span>
				</div>
		</div>

		<div class="form-group col-lg-8 col-lg-offset-2">
			<input type="text" name="c" ng-model="c" required placeholder="Contact" class="form-control st" pattern="^[6-9]{1}[0-9]{9}">

				<div class="alert alert-danger" ng-show="myForm.c.$touched && myForm.c.$invalid">
					<span ng-show="myForm.c.$error.required">Contact is required.</span>
					<span ng-show="myForm.c.$error.pattern">Invalid Contact.</span>
				</div>
		</div>

		<div class="form-group col-lg-8 col-lg-offset-2">
			<textarea rows="5" placeholder="give suggesstion" name="d" style="width: 100%;"></textarea> 

		<div class="col-lg-12"> <br></div>

		<div class="form-group col-lg-4 col-lg-offset-4 col-xs-4 col-xs-offset-3">
			<input type="submit" name="submit" value="submit" class="btn" ng-disabled="myForm.a.$dirty && myForm.a.$invalid || myForm.b.$dirty && myForm.b.$invalid || myForm.c.$dirty && myForm.c.$invalid || myForm.d.$dirty && myForm.d.$invalid" style="padding-right: 50px;padding-left: 50px; border-radius:25px; font-size: 30px; background-color: #f2bdd4">
		</div>
		</form>
	</div>
</body>
</html>

<?php

include 'footer.php';

?>