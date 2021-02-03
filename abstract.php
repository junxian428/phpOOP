<?php


abstract class Customer{

     private $id;
     private $name;
     protected $email;
     public $balance;


     public function __construct($id,$name,$email,$balance)
     {  $this -> id = $id;
        $this -> name = $name;
        $this -> email = $email;
	$this -> balance = $balance;
            
     }


     abstract function getEmail();

}



//$customer = new Customer(1,'Ho Weng Yin','holeyiho@gmail.com',0);

class Subscriber extends Customer{
      public $plan;

      public function __construct($id,$name, $email, $balance, $plan)
      {

	      parent::__construct($id, $name, $email, $balance);
	      $this -> plan = $plan;
      }

      public function getEmail(){

            return $this -> email;
      }
                     
} 


$subscriber = new Subscriber(1,'Ho weng yin','holeyiho@gmail.com', 0,'pro');
echo $subscriber -> getEmail();
?>
