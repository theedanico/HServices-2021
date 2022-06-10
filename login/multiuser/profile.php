<!DOCTYPE html>
<html style="font-size: 16px;">
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta charset="utf-8">
            <meta name="keywords" content="Household services, home services, cleaning, shopping, plumbing, hservices">
            <meta name="description" content="HServices - A platform where householder can find contractors for their problems and vice-versa">
            <title>Profile </title>
			<link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
			<link rel="stylesheet" href="../../css/stylesheet.css">
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
			
           

            <script class="u-script" type="text/javascript" src="../../js/jquery.js" defer=""></script>
			<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
            
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
			
			<li><a href="myorder.php"> ORDERS</a></li>
			<li><a href="includes/logout.php">  Logout</a></li>
			
			
			</ul>
		</div>
		</div>
		<div class="container" style="margin-top: 20px;">
		<div class="row">
		<div class="col-xs-4 col-sm-4">
			<div class="avatar-block" style="width:400px">
			<img class="card-img-top" src="../../images/daiga-ellaby-uooMllXe6gE-unsplash.jpg" alt="Card image" style="width:90%"> 
			<div style="padding: 30px"></div>
			
			</div>
		</div>
		<div class="col-sm-2"></div>
		<div class="col-sm-6">
			<div class="user-info">
				<?php
														include_once 'includes/connect.php';
														include_once 'includes/functions.php';
														session_start();
														$user_check = $_SESSION['email'];
														$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$user_check'");
														$row = mysqli_fetch_assoc($result);
														$orders = mysqli_query($conn, "SELECT phone, state FROM orders WHERE email = '$user_check'");
														$mine = mysqli_fetch_assoc($orders);
														$totalorders = mysqli_num_rows($orders);
														
														
													?>
													
			<a href="#" class="btn btn-primary" style="float: right; ">Edit Profile</a> <br /> <br />
			<p> Name:  <?php echo $row["name"] ?> </p><br />
			<p> Email: <?php echo $row["email"] ?> </p><br />
			<p> Phone: <?php 
							if ($row["role"] == 0){
								echo $mine["phone"];
							}
							else {
								echo "No Data";
							}
			?> </p> <br />
			<p> State: <?php 
							if ($row["role"] == 0){
								echo $mine["state"];
							}
							else {
								echo "No Data";
							}
			
			 ?></p> <br />
			
			</div>
			
			<div class="order-info" style="border: 1px solid red; margin-top: 5px; height: 50px">
			<p style="text-align: center; vertical-align: middle; line-height: 50px;"> You have made a total of <?php echo $totalorders ?> orders <p><br />
			</div>
		
		</div>
		
		</div>
		</div>
		
		<footer>
	<p> 
		© HServices 2021 All rights reserved<br>This website supports the browsers Google Chrome, Firefox, Safari and Edge.<span style="font-size: 1rem;"></span>
        </p>
	</footer>
	
	<script type="text/javascript" src="../../js/script.js"></script>
												


							</body>

</html>