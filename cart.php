<?php 
//it shows the products and addresses, and allow to delete them and also use a coupon
require('model/db.php'); 
require('lib/address.php');
require('lib/product.php');

$products = getProducts();

require('view/cart_view.php');

 ?>