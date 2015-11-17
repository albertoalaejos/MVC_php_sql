<?php 
session_start();
require_once("/header.php");

 ?>


<h1>List of Products</h1>
<table>
    <tr>
	  <td>Id</td>	
      <td>Name</td>
      <td>Price</td>
	  <td>Quantity</td>
    </tr>
 
    <?php foreach($products as $product): ?>
    <tr>
		<td><?php echo $product['id']?></td>
        <td><?php echo $product['name']?></td>
        <td><?php echo $product['price']?></td>

		<?php if(!array_key_exists($product['id'], $_SESSION['cart_items'])){?>
		<form action="add_to_cart.php">
			<input type='hidden' name='id' value='<?php echo $product['id']?>'>
			<input type='hidden' name='name' value='<?php echo $product['name']?>'>
			<input type='hidden' name='price' value='<?php echo $product['price']?>'>
			<td><input type='number' name='stock' value='1' min='1' max='<?php echo $product['stock']?>' class='form-control' placeholder='Type quantity here...'></td>
			<td>
			<br><input type="submit" value="Add to cart"><br>
		</form>
		<?php
		}else
		{
			$product_cart = unserialize($_SESSION['cart_items'][$product['id']]);					
			
		?>
			<td><?php echo $product_cart->stock; ?></td>
			<td>		
                Added to cart
		<?php
		}
		?>
        </td>
    </tr>
<?php endforeach;?>
</table>


<?php 


require_once("/footer.php");


 ?>