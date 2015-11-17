<?php

//to remove addresses or products from the cart
session_start();
 
if(isset($_GET['id'])) {
$id = isset($_GET['id']) ? $_GET['id'] : "";
unset($_SESSION['cart_items'][$id]);
}
 
if(isset($_GET['shipping'])) {
$shipping = isset($_GET['shipping']) ? $_GET['shipping'] : "";
unset($_SESSION['address_items']['shipping']);
}

if(isset($_GET['billing'])) {
$billing = isset($_GET['billing']) ? $_GET['billing'] : "";
unset($_SESSION['address_items']['billing']);
}

header('Location: cart.php');

?>