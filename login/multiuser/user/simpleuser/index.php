<?php include 'settings.php'; //include settings ?>
<!DOCTYPE html>
<html style="font-size: 16px;">
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta charset="utf-8">
            <meta name="keywords" content="Household services, home services, cleaning, shopping, plumbing, hservices">
            <meta name="description" content="HServices - A platform where householder can find contractors for their problems and vice-versa">
            <title>CUSTOMER ZONE</title>
			<link rel="icon" type="image/x-icon" href="../../../../images/favicon.ico">
			<link rel="stylesheet" href="../../../../css/stylesheet.css">
			<link rel="stylesheet" href="user.css">
           

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
            <meta property="og:title" content="CUSTOMER">
            <meta property="og:type" content="website">

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
			<li><a href="#">Profile</a></li>
			<li><a href="../../myorder.php"> ORDERS</a></li>
			<li><a href="../../includes/logout.php">  Logout</a></li>
			
			
			</ul>
		</div>
		</div>
        
         <form action="../../order.php" method="post" onsubmit = "validateForm()">
             <div class="category">
                <h2>Choose the category</h2>
                <p>Services List</p>
                <select name="Services">
                    <option value="General Cleaning">General cleaning</option>
                    <option value="Plumbing">Plumbing</option>
                    <option value="Electric">Electric</option>
                    <option value="Corporate Services">Corporate services</option>
                </select>
             </div>
             
             <div class="payment">
                <h2>Payment</h2>
                 <div style="float: left; width: 50%;" id="pay1">
                     <span>Currency</span>
                    
                        <select name="payment">
                            <option value="dollar">USD</option>
                            <option value="rouble">P</option>
                            <option value="Congolese Franc">CDF</option>
                        </select>
                 </div>
                
             
                 <div style="float: right; width: 50%;" id="pay2">
                     <span>Amount</span>
                    
                    <input name="amount" type="text" id="amount"  required />
					
                    </div>
                    <div style="clear: both; font-size: 1px;"></div>
                 </div>
             
             
             <div class="timespan">
                <h2>Choose the TimeSpan</h2>
             <div style="float: left; width: 50%;">
                 <span>Start</span>
                 <input name="start" type="datetime-local" required />
             </div>
             <div style="float: right; width: 50%;">
                 <span>Finish</span>
                 <input name="Finish" type="datetime-local" required />

             </div>
             <div style="clear: both; font-size: 1px;"></div>
             
             
             
             </div>

             <div class="info">
                <H2>Personal Information</H2>
             <input name="firstname" type="text" placeholder="First name" id="firstname"  required /> <br> <br>
             <input name="lastname" type="text" placeholder="Last name" id="lastname"  required /> <br> <br>
             <input name="email" type="text" placeholder="Email" id="email"  required /> <br> <br>
             <input name="phone" type="text" id="phone" type="text"  placeholder="xxx-xxx-xxx" required /> <br> <br>
             <input name="state" type="text" placeholder="State" id="state"  required /> <br> <br>
             </div>
             <div class="add">
                <h2>Additional information</h2>
                <textarea rows="4" cols="40" name="additional" placeholder="Text"></textarea> <br>
             </div>
             <br>
             

             

             <div class="button">

                 <div style="float: left; width: 50%;">
                    <button name="send" type="submit" value="OK"> Send </button>
                </div>

                <div style="float: right; width: 50%;">
                    <button name="cancel" type="submit" value="Cancel"> Cancel </button>

                </div>
                <div style="clear: both; font-size: 1px;"></div>

             </div>
             
                
                

             

            
             

         </form>           
        <footer>
	<p> 
		© HServices 2021 All rights reserved<br>This website supports the browsers Google Chrome, Firefox, Safari and Edge.<span style="font-size: 1rem;"></span>
        </p>
	</footer>
	
	<script type="text/javascript" src="../../../../js/script.js"></script>
	<script type="text/javascript" src="validate.js"></script>
		
        </body>
        </html>