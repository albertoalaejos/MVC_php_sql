<?php 
//it shows the forms to add the shipping and billing address.
require('model/db.php'); 

$products = getProducts();

require('view/addresses_view.php');

 ?>