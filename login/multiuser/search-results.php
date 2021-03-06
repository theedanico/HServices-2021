<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="keywords" content="Household services, home services, cleaning, shopping, plumbing, hservices">
	<meta name="description" content="HServices - A platform where householder can find contractors for their problems and vice-versa">
    <title>Messages</title>
	<link rel="icon" type="image/x-icon" href="../../images/favicon.ico">
    <!-- external stylesheets -->
    <link rel="stylesheet" href="chats.css">
    <link rel="stylesheet" href="snackbar.css">
	
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body onLoad = "myFunction()">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <a class="navbar-brand" href="#"><img src="../../images/HSERVICES2.png" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./chats.php">Home <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="includes/logout.php">Logout</a>
      </li>
      
  </div>
</nav>
 <!-- chats section -->
    <div class="container mt-4">
      <?php
        include "snackbar.php";
      ?>
      <div class="card">
        <div class="card-title text-center">
          <form class="form-inline mt-4" style = "display : inline-block" method = "POST" action = "scripts/search-users.php">
            <input class="form-control mr-sm-2" type="search" name = "search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
        <div class="card-body mb-4">
          <?php
		  
			include_once 'includes/connect.php';
			include_once 'includes/functions.php';
			session_start();
			
			$search = $_SESSION['search'];
            $searchUser = "SELECT * FROM users WHERE name = '$search' OR email = '$search'";
            $searchUserStatus = mysqli_query($conn,$searchUser) or die(mysqli_error($conn));
            if(mysqli_num_rows($searchUserStatus) > 0) {
                while($searchUserRow = mysqli_fetch_assoc($searchUserStatus)){
                    $email = $searchUserRow['email'];
          ?>
          <div class="card">
            <div class="card-body">
                <h6><strong><?=$searchUserRow['name']?></strong><a href="./message.php?receiver=<?=$email?>" class="btn btn-outline-primary" style = "float:right">Send message</a></h6>
            </div>
          </div>
          <?php
                }
            } else {
                echo "No users found!";
            }
          ?>
        </div>
      </div>
    </div>

    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- Scripts -->
    <script src="snackbar.js"></script>
</body>
</html>