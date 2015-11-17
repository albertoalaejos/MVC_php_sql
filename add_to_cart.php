<?php

// it is called by the index, and save the product objects in a session array.
session_start();
require('lib/product.php');

// get the product information
$id = isset($_GET['id']) ? $_GET['id'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";
$price = isset($_GET['price']) ? $_GET['price'] : "";
$stock = isset($_GET['stock']) ? $_GET['stock'] : "";

if(!isset($_SESSION['cart_items'])){
    $_SESSION['cart_items'] = array();
}
 

if(!array_key_exists($id, $_SESSION['cart_items'])){

    $_SESSION['cart_items'][$id]= serialize( new Product($id,$name,$price,$stock) );

}

header('Location: index.php');

?>