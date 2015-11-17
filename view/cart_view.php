<?php 
session_start();
require_once("/header.php");

 ?>

<h1>Cart</h1>
<table>
    <tr>
	  <td>Id</td>	
      <td>Name</td>
      <td>Price</td>
	  <td>Stock</td>
    </tr>

    <?php 
foreach ($_SESSION['cart_items'] as $item) {
	echo hello;
}

?>			
	
    <?php 
	$total = 0;
	foreach($products as $product): ?>
    <tr>
		<?php if(array_key_exists($product['id'], $_SESSION['cart_items'])){?>
		<td><?php echo $product['id']?></td>
        <td><?php echo $product['name']?></td>
        <td><?php echo $product['price']?></td>
		
		<?php
			$product_cart = unserialize($_SESSION['cart_items'][$product['id']]);								
		?>
		<td><?php echo $product_cart->stock; ?></td>		
        <td>
            <a href="remove_from_cart.php?id=<?php echo $product['id']?>">
                <span></span> Remove from cart
			</a>
        </td>
		<?php
		$total = $total + ($product['price']*$product_cart->stock);
		}
		?>
    </tr>
<?php endforeach;?>
</table>

<div class="addressform">
	<form action="add_address.php" >
	<h1>Shipping Address</h1>
	<?php
		if(array_key_exists("shipping", $_SESSION['address_items'])){
			$shipping_address = new Address();
			$shipping_address = unserialize($_SESSION['address_items']['shipping']);			

			echo $shipping_address->first_name.'<br>';
			echo $shipping_address->last_name.'<br>';
			echo $shipping_address->address.'<br>';
			echo $shipping_address->city.'<br>';
			echo $shipping_address->zip_code.'<br>';
			echo $shipping_address->country.'<br>';
			echo
			"<a href='remove_from_cart.php?shipping=1'>
                <span></span> Remove Address
			</a>";

		}
		else{

			echo "not filled";			
		
		}
	?>
	</form>
</div>

<div class="addressform">
	<form action="add_address.php" >
	<h1>Billing Address</h1>
	<?php
		if(array_key_exists("billing", $_SESSION['address_items'])){
			$billing_address = new BillingAddress();
			$billing_address = unserialize($_SESSION['address_items']['billing']);			

			echo $billing_address->first_name.'<br>';
			echo $billing_address->last_name.'<br>';
			echo $billing_address->address.'<br>';
			echo $billing_address->city.'<br>';
			echo $billing_address->zip_code.'<br>';
			echo $billing_address->country.'<br>';	
			echo $billing_address->bank_account.'<br>';
			echo
			"<a href='remove_from_cart.php?billing=1'>
                <span></span> Remove Address
			</a>";
		}
		else{
			echo "not filled";
		}
	?>
	</form>
</div>

<div class="addressform">
	<form action="discount.php" >
	<h1>Total prize</h1>
	<?php
		if(isset($_SESSION['discount'])){
			if($_SESSION['discount'] == -1){
				echo 'Cuopon not valid<br>';				
			}
			else{
				echo 'Discount applied: (10%)<br>';
				echo '$'.(($total/10)*9).'<br>';				
			}
	
		}
		else{
			echo '$'.$total.'<br>';	
			?>
			<input type='text' name='discount'>
			<br><input type='submit' value='Use coupon'><br>
			<?php	
		}
			?>
	</form>
</div>


<?php 


require_once("/footer.php");


 ?>