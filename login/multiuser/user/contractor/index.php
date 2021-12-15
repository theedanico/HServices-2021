<?php include 'settings.php'; //include settings ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta charset="utf-8">
            <meta name="keywords" content="Household services, home services, cleaning, shopping, plumbing, hservices">
            <meta name="description" content="HServices - A platform where householder can find contractors for their problems and vice-versa">
            <title>CONTRACTOR ZONE</title>
			
			
			<script src="js/jquery-1.10.2.min.js"></script>
			<script src="js/jquery-ui.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<link href = "css/jquery-ui.css" rel = "stylesheet">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			
            <link rel="stylesheet" href="../../contr.css">
			
			
			<link rel="icon" type="image/x-icon" href="../../../../images/favicon.ico">

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
            <meta property="og:title" content="CONTRACTOR">
            <meta property="og:type" content="website">

            
        </head>
  
        <body>
            
		
		
		<div class="topnav" id="myTopnav">
		<a href="#" class="active"><img src="../../../../images/HSERVICES2.png" alt="logo"></a>
		<a href="#">Profile</a>
		<a href="#">Orders</a>
		<a href="../../includes/logout.php">Logout</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
		<i class="fa fa-bars"></i>
		</a>
		</div>

		<br>
 
    
						<div class="container">
							<div class="row">
							 <br />
							 <h2 align="center">Services needed!</h2>
							 <br />
								<div class="col-md-3">                    
									<div class="list-group">
									 <h3>Price</h3>
									 <input type="hidden" id="hidden_minimum_price" value="0" />
													<input type="range" id="hidden_maximum_price" value="65000" />
													<p id="price_show">1000 - 65000</p>
													<div id="price_range"></div>
												</div>    
									<div class="list-group">
						 <h3>Service category</h3>
										<div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
						 <?php

										$query = "SELECT DISTINCT Services FROM orders  ORDER BY id DESC";
										$result = $conn->query($query);
										$data = $result->fetch_all(MYSQLI_ASSOC);
										foreach($data as $row)
										{
										?>
										<div class="list-group-item checkbox">
											<label><input type="checkbox" class="common_selector services" value="<?php echo $row['Services']; ?>"  > <?php echo $row['Services']; ?></label>
										</div>
										<?php
										}

										?>
										</div>
									</div>
									
									
								
								<div class="list-group">
						<h3>State</h3>
								<?php

								$query = "
								SELECT DISTINCT state FROM orders  ORDER BY state DESC
								";
								$result = $conn->query($query);
								$data = $result->fetch_all(MYSQLI_ASSOC);
								foreach($data as $row)
								{
								?>
								<div class="list-group-item checkbox">
									<label><input type="checkbox" class="common_selector state" value="<?php echo $row['state']; ?>" > <?php echo $row['state']; ?></label>
								</div>
								<?php    
								}

								?>
							</div> </div>
							<div class="col-md-9">
             <br />
                <div class="row filter_data">

                </div>
            </div>
			</div></div>
			
			<div class="blankspace" id="id-123"></div>
	
	
	<footer>
	<p> 
		© HServices 2021 All rights reserved<br>This website supports the browsers Google Chrome, Firefox, Safari and Edge.<span style="font-size: 1rem;"></span>
        </p>
	</footer>
	<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
	
	<script type="text/javascript" src="js/filter.js"></script>
			
    
  </body>
</html>