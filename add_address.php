<?php
//when filling the form and submiting it calls this file
//save the address objects in a session array.
session_start();
require('lib/address.php'); 
 
// get the product information
$type = isset($_GET['type_address']) ? $_GET['type_address'] : "";
$first_name = isset($_GET['firstname']) ? $_GET['firstname'] : "";
$last_name = isset($_GET['lastname']) ? $_GET['lastname'] : "";
$address = isset($_GET['address']) ? $_GET['address'] : "";
$city = isset($_GET['city']) ? $_GET['city'] : "";
$zip_code = isset($_GET['zip_code']) ? $_GET['zip_code'] : "";
$country = isset($_GET['country']) ? $_GET['country'] : "";

if($type=="billing"){
	$bank_account = isset($_GET['bank_account']) ? $_GET['bank_account'] : "";
}

if(!isset($_SESSION['address_items'])){
    $_SESSION['address_items'] = array();
}
 

if(!array_key_exists($type, $_SESSION['address_items'])){
	if($type=="billing"){
		$_SESSION['address_items'][$type] = serialize( new BillingAddress($first_name,$last_name,$address,$city,$zip_code,$country,$bank_account) );
	}
	else{
		$_SESSION['address_items'][$type] = serialize( new Address($first_name,$last_name,$address,$city,$zip_code,$country) );
	}
}


header('Location: addresses.php');	

?>