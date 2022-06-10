<?php

 include 'settings.php'; //include settings ?>
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
			
			
			<link href = "css/jquery-ui.css" rel = "stylesheet">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			
			
			
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
			<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/css/bootstrap-slider.min.css" rel="stylesheet"/>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/bootstrap-slider.min.js"></script>
			<script src="filter.js"></script>
			
			
            <link rel="stylesheet" href="../../contr.css">
			
			
			<link rel="icon" type="image/x-icon" href="../../../../images/favicon.ico">

            
            
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
		<a href="../../chats.php">Messages</a>
		<a href="../../includes/logout.php">Logout</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
		<i class="fa fa-bars"></i>
		</a>
		</div>

		<br>
 
    
						<div class="container">
						<h2 align="center">Services needed!</h2>
						<?php
							include 'OrderClass.php';
							$order = new Order();	
						?>	
							<div class="row">
							 
								<div class="col-md-3">                    
									<div class="list-group">
									<h3>Price</h3>	
									<div class="list-group-item">
										<input id="priceSlider" data-slider-id='ex1Slider' type="text" data-slider-min="1000" 
										data-slider-max="65000" data-slider-step="1" data-slider-value="14"/>
											<div class="priceRange">1000 - 65000</div>
												<input type="hidden" id="minPrice" value="0" />
													<input type="hidden" id="maxPrice" value="65000" />                  
			</div>			
		</div>      
									<div class="list-group">
									<h3>Services Category</h3>
									<div class="serviceSection">
				<?php
				$Services = $order->getServices();
				foreach($Services as $serviceDetails){	
				?>
				<div class="list-group-item checkbox">
				<label><input type="checkbox" class="productDetail service" value="<?php echo $serviceDetails["Services"]; ?>"  > <?php echo $serviceDetails["Services"]; ?></label>
				</div>
				<?php }	?>
			</div>
		</div>
									
									
								
								<div class="list-group">
									<h3>State</h3>
									<div class="stateSection">
				<?php
				$state = $order->getState();
				foreach($state as $stateDetails){	
				?>
				<div class="list-group-item checkbox">
				<label><input type="checkbox" class="productDetail state" value="<?php echo $stateDetails["state"]; ?>"  > <?php echo $stateDetails["state"]; ?></label>
				</div>
				<?php }	?>
			</div>
		</div> </div>
					<div class="col-md-9">
	 <br />
		<div class="row searchResult">
		</div>
	</div>
			</div></div>
			
			
	
	
	<footer>
	<p> 
		© HServices 2021 All rights reserved<br>This website supports the browsers Google Chrome, Firefox, Safari and Edge.<span style="font-size: 1rem;"></span>
        </p>
	</footer>
	
	
			
    
  </body>
</html>