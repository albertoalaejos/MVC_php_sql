<?php
//for shipping Address objects
class Address {

    public $first_name;
    public $last_name;
    public $address;
	public $city;
	public $zip_code;
	public $country;

    function __construct($first_name,$last_name,$address,$city,$zip_code,$country) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->address = $address;
        $this->city = $city;
		$this->zip_code = $zip_code;
		$this->country = $country;
    }

}
//for billing Address objects
class BillingAddress extends Address  {

    public $bank_account;


    function __construct($first_name,$last_name,$address,$city,$zip_code,$country,$bank_account) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->address = $address;
        $this->city = $city;
		$this->zip_code = $zip_code;
		$this->country = $country;
		$this->bank_account = $bank_account;
    }

}
