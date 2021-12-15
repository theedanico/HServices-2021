<?php
include_once 'includes/connect.php';

if(isset($_POST['send']))
{    
     $services = $_POST['Services'];
	 $payment = $_POST['payment'];
	 $amount = $_POST['amount'];
	 $start = date("Y-m-d H:i:s", strtotime($_POST['start']));
	 $finish = date("Y-m-d H:i:s", strtotime($_POST['Finish']));
	 $firstname = $_POST['firstname'];
	 $lastname = $_POST['lastname'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
	 $state = $_POST['state'];
	 $additional = $_POST['additional'];
	 
	 
     $sql = "INSERT INTO orders (Services,payment,amount,start,Finish,firstname,lastname,email,phone,state,additional)
     VALUES ('$services','$payment','$amount', '$start', '$finish', '$firstname', '$lastname', '$email', '$phone', '$state', '$additional')";
	 
     if (mysqli_query($conn, $sql)) {
		 
		 header("location:myorder.php");
		 
        // echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>