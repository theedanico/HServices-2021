<?php
if(isset($_POST['submit'])){
$to = "theedanico@gmail.com";
$from = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$subject = $_POST['subject'];
$message = $firstname . $lastname . " messaged you:" . "\n\n" . $_POST['message'];

$headers = "From:" . $from;

mail($to,$subject,$message,$headers);

echo "Message sent. Thank you " . $firstname . ", We will get back to you shortly.";
echo "<br /><br /><a href='index.html'>Go back to the website.</a>";
 
}

?>
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="index.html");}
window.setTimeout("changeurl();",3000);
</script>
