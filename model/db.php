<?php
//method to get the products from the database 
function getProducts()
{
    $cn = mysql_connect('localhost', 'root', '');
    mysql_select_db('shop', $cn);
      
    $result = mysql_query('SELECT id, name, price, stock FROM products', $cn);
    $products = array();
     
    while($product = mysql_fetch_assoc($result))
    {
        $products[] = $product;
    }
     
    mysql_close();    
 
    return $products;
}
//method to get the coupons from the database 
function getCoupons()
{
    $cn = mysql_connect('localhost', 'root', '');
    mysql_select_db('shop', $cn);
      
    $result = mysql_query('SELECT number FROM coupons', $cn);
    $coupons = array();
     
    while($coupon = mysql_fetch_assoc($result))
    {
        $coupons[] = $coupon;
    }
     
    mysql_close();    
 
    return $coupons;
}

?>