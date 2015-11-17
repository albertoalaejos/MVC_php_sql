<?php
//for product objects
class Product {
	
    public $id;
    public $name;
    public $price;
	public $stock;

    function __construct($id,$name,$price,$stock) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

}
?>