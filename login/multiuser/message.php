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
    <style>
	.message-box{

    background-color: whitesmoke;
    width: 30%;
    height: auto;
    border-radius: 5px;

}
	</style>
	
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

 <div class="container">
        <?php
		
			include_once 'includes/connect.php';
			include_once 'includes/functions.php';
			session_start();
			
			$email = $_SESSION['email'];
			$receiver = $_GET['receiver'];
			
            $getReceiver = "SELECT * FROM users WHERE email = '$receiver'";
            $getReceiverStatus = mysqli_query($conn,$getReceiver) or die(mysqli_error($conn));
            $getReceiverRow = mysqli_fetch_assoc($getReceiverStatus);
            $received_by = $getReceiverRow['email'];
        ?>
        <div class="card mt-4">
            <div class="card-header">
                <h6><strong> <?=$receiver?></strong></h6>
            </div>
            <?php
                $getMessage = "SELECT * FROM messages WHERE sent_by = '$receiver' 
				AND received_by = '$email' OR sent_by = '$email' AND received_by = '$receiver' ORDER BY createdAt asc";
                $getMessageStatus = mysqli_query($conn,$getMessage) or die(mysqli_error($conn));
                if(mysqli_num_rows($getMessageStatus) > 0) {
                    while($getMessageRow = mysqli_fetch_assoc($getMessageStatus)) {
                        $message_id = $getMessageRow['id'];
            ?>
            <div class="card-body">
            <h6 style = "color: #007bff"><?=$getMessageRow['sent_by']?></h6>
                <div class="message-box ml-4">    
                    <p class="text-center"><?=$getMessageRow['message']?></p>
                </div>
            </div>
            <?php
                    } 
                } else {
            ?>
            <div class="card-body">
                    <p class = "text-muted">No messages yet! Say 'Hi'</p>
            </div>
            <?php
                }
            ?>
            <div class="card-footer text-center">
            <form action="scripts/send.php" method = "POST" style = "display: inline-block">
            <input type="hidden" name = "sent_by" value = "<?=$email?>"/>
            <input type="hidden" name = "received_by" value = "<?=$receiver?>"/>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <input type="text" name = "message" id = "message" class="form-control" placeholder = "Type your message here" required/>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type = "submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

 <!-- Bootstrap scripts -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>