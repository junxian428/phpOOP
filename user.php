<?php


class user{

        public $username;
	public $password;
	public static $passwordLength = 5;

	public static function getPasswordLength(){


                  return self::$passwordLength;
	}

}


echo user::getPasswordLength();


?>
