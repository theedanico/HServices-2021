<?php
session_start();
include 'OrderClass.php';
$order = new Order();
if(isset($_POST["action"])){
	$html = $order->searchOrders($_POST);
	$data = array(
		"html"	=> $html,	
	);
	echo json_encode($data);	
}

?>