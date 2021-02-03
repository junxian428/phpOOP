<?php
 
class Customer{

	public $id = 1;
	public $name;
	public $email;
	public $balance;

	public function __construct(){
              echo "<br>";
	      echo 'The Constructor Ran...';
	      echo "<br>";
	}

	public function getCustomer($id){

              $this -> id = $id;
	      return 'John Doe';

	}

	public function __destruct(){

              echo "<br>";
              echo 'The Destructor Ran...';
	}
}

$customer = new Customer;

echo $customer -> getCustomer(1);


?>
