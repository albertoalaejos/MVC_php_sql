<?php 
session_start();
require_once("/header.php");

 ?>

<div class="addressform">
	<form action="add_address.php" >
	<h1>Shipping Address</h1>
	<?php
	if(!array_key_exists("shipping", $_SESSION['address_items'])){ ?>
		<input type="hidden" name="type_address" value="shipping"><br>
		First name:<input type="text" name="firstname" required><br>
		Last name:<input type="text" name="lastname" required><br>
		Address:<input type="text" name="address" required><br>
		City:<input type="text" name="city" required><br>
		Zip Code:<input type="text" name="zip_code" required><br>
		Country:<input type="text" name="country" required><br>
		<br><input type="submit" value="Add address" required><br>
	<?php		
	}
	else{
		echo "Already filled in";
	}
?>		
	</form>
</div>

<div class="addressform">
	<form action="add_address.php" >
	<h1>Billing Address</h1>
	<?php
	if(!array_key_exists("billing", $_SESSION['address_items'])){ ?>
	<input type="hidden" name="type_address" value="billing"><br>
	First name:<input type="text" name="firstname" required><br>
	Last name:<input type="text" name="lastname" required><br>
	Address:<input type="text" name="address" required><br>
	City:<input type="text" name="city" required><br>
	Zip Code:<input type="text" name="zip_code" required><br>
	Country:<input type="text" name="country" required><br>
	Bank Account:<input type="text" name="bank_account" required><br>
	<br><input type="submit" value="Add address"><br>
	<?php		
	}
	else{
		echo "Already filled in";
	}
?>		
	</form>
</div>



<?php 


require_once("/footer.php");


 ?>