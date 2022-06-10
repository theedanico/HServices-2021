<?php

 include 'settings.php'; //include settings 

 
 ?>
 <!DOCTYPE html>
<html style="font-size: 16px;">
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta charset="utf-8">
            <meta name="keywords" content="Household services, home services, cleaning, shopping, plumbing, hservices">
            <meta name="description" content="HServices - A platform where householder can find contractors for their problems and vice-versa">
            <title>ADMINSTRATOR ZONE</title>
			<link rel="icon" type="image/x-icon" href="../../../../images/favicon.ico">
			<link rel="stylesheet" href="../../../../css/stylesheet.css">
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
			
           

            <script class="u-script" type="text/javascript" src="../../../../js/jquery.js" defer=""></script>
            
            <link id="u-theme-google-font" rel="stylesheet" 
			href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
            <script type="application/ld+json">{
                    "@context": "http://schema.org",
                    "@type": "Organization",
                    "name": "",
                    "logo": "images/HSERVICES2.png"
            }</script>
            <meta name="theme-color" content="#478ac9">
            <meta property="og:title" content="ADMINSTRATOR">
            <meta property="og:type" content="website">
			<style>
			.card-1{
				
				background-color: blue;
				color: white;
				padding: 5px;
				text-align: center;
				space-between: 2px;
			}
			</style>

        </head>
  
        <body class="u-body">
            
					
		<div class="header">
		<div class="logo">
			<a href="#"><img src="../../../../images/HSERVICES2.png" alt="logo"></a>
		</div>
		<div class="navbar">
			<div class="icon-bar" onclick="Show()">
		<i></i>
		<i></i>
		<i></i>
		</div>

			<ul id="nav-lists">
			<li class="close"><span onclick="Hide()">×</span></li>
			<li><a href="#">Dashboard </a></li>
			<li><a href="requests.php">Requests</a></li>
			
			<li><a href="../../includes/logout.php">  Logout</a></li>
			
			
			</ul>
		</div>
		</div>
		
		
		<div class="container" style="margin-top: 20px;">
		<div class="row" style="margin-top: 10px;">
		<?php 
		$contr = mysqli_query($conn, "SELECT * FROM users WHERE role = '1'");
		$user = mysqli_query($conn, "SELECT * FROM users WHERE role = '0'");
		$orders = mysqli_query($conn, "SELECT * FROM orders ");
		$totalcontr = mysqli_num_rows($contr);
		$totaluser = mysqli_num_rows($user);
		$totalorders = mysqli_num_rows($orders);
		
		?>
		<div class="col-sm-4">
		<div class="card-1">
		<p> Total contractors: <strong> <?php echo $totalcontr; ?> </strong></p> </div>
		</div>
		<div class="col-sm-4">
		<div class="card-1">
		<p> Total householders: <strong> <?php echo $totaluser; ?> </strong></p></div>
		</div>
		<div class="col-sm-4">
		<div class="card-1">
		<p>Total orders: <strong><?php echo $totalorders; ?> </strong></p></div>
		</div>
		</div>
		<div class="row" style="margin-top: 50px;">
		<h3>Users List </h3>
		<?php
		$userlist = mysqli_query($conn, "SELECT * FROM users WHERE (role = '1' OR role = '0') ");
		?>
		
		<?php
			if (mysqli_num_rows($userlist) > 0) {
		?>
		<table class="table table-bordered table-striped">
			<tr>
			<td>Name</td>
			<td>Email</td>
			<td>Role</td>
			<td>Action</td>
															
			</tr>
		<?php
			$i=0;
			while($row = mysqli_fetch_array($userlist)) {
				
			?>
			<tr>
			<td><?php echo $row["name"]; ?></td>
			
			<td><?php echo $row["email"]; ?></td>
			<td><?php 
					if ($row["role"] == 0){
						echo "Householder";
					}
					else{
						echo "Contractor";
					}
			 ?></td>
			
			<td><a href="#">Edit</a> <br/> <a href="#" style="color: red;"> Delete </a></td>
															
															
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
		</div>
		<footer style="position: fixed; left: 0; bottom: 0; width: 100%;">
	<p> 
		© HServices 2021 All rights reserved<br>This website supports the browsers Google Chrome, Firefox, Safari and Edge.<span style="font-size: 1rem;"></span>
        </p>
	</footer>
	<script type="text/javascript" src="../../../../js/script.js"></script>
		</body>
		</html>