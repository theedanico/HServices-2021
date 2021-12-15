

<!DOCTYPE html>
<html>
					<head>
								<meta name="viewport" content="width=device-width, initial-scale=1.0">
								<meta charset="utf-8">
								<meta name="keywords" content="Household services, home services, cleaning, shopping, plumbing, hservices">
								<meta name="description" content="HServices - A platform where householder can find contractors for their problems and vice-versa">
								<title>CUSTOMER ZONE</title>
								<link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
								<link rel="stylesheet" href="../../css/stylesheet.css">
								<link rel="stylesheet" href="myorder.css">
								<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
								

								<script class="u-script" type="text/javascript" src="../../js/jquery.js" defer=""></script>
								
								<link id="u-theme-google-font" rel="stylesheet" 
								href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
						
								<script type="application/ld+json">{
										"@context": "http://schema.org",
										"@type": "Organization",
										"name": "",
										"logo": "images/HSERVICES2.png"
								}</script>
								<meta name="theme-color" content="#478ac9">
								<meta property="og:title" content="CUSTOMER">
								<meta property="og:type" content="website">
								
								

					</head>
		<body class="u-body">
		<div class="header">
		<div class="logo">
			<a href="#"><img src="../../images/HSERVICES2.png" alt="logo"></a>
		</div>
		<div class="navbar">
			<div class="icon-bar" onclick="Show()">
		<i></i>
		<i></i>
		<i></i>
		</div>

			<ul id="nav-lists">
			<li class="close"><span onclick="Hide()">×</span></li>
			<li><a href="#">Profile</a></li>
			<li><a href="user/simpleuser/">Create order</a></li>
			<li><a href="includes/logout.php">  Logout</a></li>
			
			
			</ul>
		</div>
		</div>
												
												<div class="space2"></div>
												
												<div style="overflow-x: auto;">
												
												
												<?php
														include_once 'includes/connect.php';
														include_once 'includes/functions.php';
														session_start();
														$user_check = $_SESSION['email'];
														$result = mysqli_query($conn,"SELECT Services, payment, amount, start, Finish FROM orders WHERE email = '$user_check'");
													?>
													
													
													<?php
															if (mysqli_num_rows($result) > 0) {
															?>
															<table class="table table-bordered table-striped">
															<tr>
															<td>Services Category</td>
															<td>Currency</td>
															<td>Amount</td>
															<td>Start</td>
															<td>Finish</td>
															
															</tr>
															<?php
															$i=0;
															while($row = mysqli_fetch_array($result)) {
															?>
															<tr>
															<td><?php echo $row["Services"]; ?></td>
															<td><?php echo $row["payment"]; ?></td>
															<td><?php echo $row["amount"]; ?></td>
															<td><?php echo $row["start"]; ?></td>
															<td><?php echo $row["Finish"]; ?></td>
															
															
															</tr>
															<?php
															$i++;
															}
															?>
															</table>
															<?php
															}
															else{
															echo "No result found";
															}
															?>
															
												
												</div>
												
	<footer>
	<p> 
		© HServices 2021 All rights reserved<br>This website supports the browsers Google Chrome, Firefox, Safari and Edge.<span style="font-size: 1rem;"></span>
        </p>
	</footer>
	
	<script type="text/javascript" src="../../js/script.js"></script>
												


							</body>

</html>