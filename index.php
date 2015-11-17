<?php 

//it shows the products and allow the user to add them to the cart.
session_start();
require('model/db.php'); 
require('lib/product.php'); 

$products = getProducts();

$counter = 1;

foreach($products as $product): 
    $_SESSION['product'][$counter] = new Product($product['id'],$product['name'],$product['price'],$product['stock']);
	$counter = $counter + 1;
endforeach;

require('view/products_view.php');

 ?>