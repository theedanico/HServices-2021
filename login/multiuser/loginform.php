<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="../../images/favicon.ico">

	<link rel="stylesheet" type="text/css" href="../xvendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="../xvendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="../xvendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="../xvendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="../css/util.css">
	
	<link rel="stylesheet" type="text/css" href="../css/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../../images/daiga-ellaby-uooMllXe6gE-unsplash.jpg" alt="IMG">
                    
				</div>

				<form class="login100-form validate-form" method="post" action="includes/login.php">
					<span class="login100-form-title">
						Log in to proceed
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button    type="submit" name="login" class="login100-form-btn">
							Log in
						</button>
					</div>

					

					<div class="text-center p-t-136">

						<a class="txt2" href="../../index.html">
							
							<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
							Back
						</a>&nbsp; &nbsp;



						<a class="txt2" href="../../requestRegistration.html">
							Sign up
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>

						


					</div>


					

					
				</form>
			</div>
		</div>
	</div>
	
	

	
	
	<script src="xvendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="xvendor/bootstrap/js/popper.js"></script>
	
	<script src="xvendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="xvendor/select2/select2.min.js"></script>

	<script src="xvendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

	<script src="js/main.js"></script>

</body>
</html>