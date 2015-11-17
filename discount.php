<?php 

//it is called by the cart when the user types his coupon number.
session_start();
require('model/db.php'); 

$discount = isset($_GET['discount']) ? $_GET['discount'] : "";

$coupons = getCoupons();

$_SESSION['discount'] = -1;
foreach($coupons as $coupon): 
	if($coupon['number']==$discount){
		$_SESSION['discount'] = 1;	
	}
endforeach;

header('Location: cart.php');

 ?>