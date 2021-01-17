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
		box-shadow: 10px 25px 55px grey;
		border-radius: 35px;
		position: absolute;	
		top: -90px;
	}
	@media only screen and (max-width: 760px){
		.fir{
			margin-left: 70px;
		}
	}

	#log{
		font-size: 40px;
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
	@media only screen and (max-width: 760px){
		.ima{
			margin-left: -5px;
		}
	}
</style>
</head>
<body ng-app="">
		<div class="col-lg-12" id="particles-js">
			<script type="text/javascript" src="particles.js"></script>
			<script type="text/javascript" src="app.js"></script>




	<div class="col-lg-8 col-lg-offset-2 fir">
		<div class="col-lg-6">
		<form name="myForm" action="user regisphp.php" method="post">
		<div class="col-lg-6 col-lg-offset-3 col-xs-10 col-xs-offset-1">
			<label id="log">Sin Up</label>
		</div>

	
		<div class="col-lg-4 col-lg-offset-4">
			<div class="col-lg-10 col-lg-offset-1 col-xs-4 col-xs-offset-3 " id="image">
				<img src="home.ico" class="ima" style="height: 60px;">
			</div>
		</div>
		
		<div class="col-lg-12 col-xs-12"><br></div>	

		<div class="form-group col-lg-8 col-lg-offset-2">
			<input type="text" name="a" placeholder="Name" ng-model="a" required class="form-control st" pattern="^[A-Za-z ]+">

			<div class="alert alert-danger" ng-show="myForm.a.$touched && myForm.a.$invalid">
					<span ng-show="myForm.a.$error.required">Username is required.</span>
					<span ng-show="myForm.a.$error.pattern">Alphabet is required.</span>
				</div>
		</div>
		
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
			<input type="password" name="d" ng-model="d" required placeholder="password" class="form-control st" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">

			<div class="alert alert-danger" ng-show="myForm.pattern.$touched && myForm.pattern.$invalid">
				<span ng-show="myForm.d.$error.required">Password is required.</span>
				<span ng-show="myForm.d.$error.pattern">Invalid Password</span>
				</div>
		</div>

		<div class="col-lg-12"> <br></div>

		<div class="form-group col-lg-4 col-lg-offset-4 col-xs-4 col-xs-offset-3">
			<input type="submit" name="submit" value="Register" class="btn btn-primary" ng-disabled="myForm.a.$dirty && myForm.a.$invalid || myForm.b.$dirty && myForm.b.$invalid || myForm.c.$dirty && myForm.c.$invalid || myForm.d.$dirty && myForm.d.$invalid" style="padding-right: 20px;padding-left: 20px; border-radius:25px;">
		</div>
		</form>
	</div>

	<div class="col-lg-6" style="padding: 0px; ">
		<img src="capture.jpg" style="width: 100%; border-radius: 25px;">
	</div>
</div>

</div>
</body>
</html>