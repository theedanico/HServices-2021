<?php
// Include the database configuration file

include_once 'login/multiuser/includes/connect.php';
$statusMsg = '';


// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
	
    // Allow certain file formats
	
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
		
        // Upload file to server
		
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
			
            // Insert image file name into database
			
            $insert = $conn->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
			
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
	
	$firstname = $_POST['firstname']; 
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	
	$sql = "INSERT into usersReq (firstname, lastname, email, address)
	VALUES ('$firstname', '$lastname', '$email', '$address')";
	if (mysqli_query($conn, $sql)) {
		 
		 echo "Your request was send to the admin!";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
	
}else{
    $statusMsg = 'Please fill out the form completely.';
}
// Display status message
echo $statusMsg;


?>