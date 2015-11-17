<HTML>
<link href="view/css/default.css" rel="stylesheet" type="text/css" media="all" />
<head>
</head>
<body>
    <header>
	            <li>
                    <a href="index.php">Products</a>
                </li>
	            <li>
                    <a href="addresses.php">Addresses</a>
                </li>
                <li>
                    <a href="cart.php">
                        <?php
                        // count products in cart
                        $cart_count=count($_SESSION['cart_items']);
                        ?>
                        Cart <span class="badge" id="comparison-count"><?php echo $cart_count; ?></span>
                    </a>
                </li>

    </header>