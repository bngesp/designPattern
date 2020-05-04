<?php


/***
 PHP
****/

class SingletonBD
{
	private static $connectionBD = null;
	
	private function __construct()
	{
		// pdo ou mysqli
	}
	public static function getIntance()
	{
		if(is_null(static::$connectionBD) )  // $this => self, static :: $
		// isset
		{
			echo "creation<br>";
			static::$connectionBD = new SingletonBD();
		} 
		else
		{
			echo "utilisation sans creation<br>";
		}
		return static::$connectionBD;
	}

}
// Methode d'instance => objet $sign = new Singleton()  
// sign.getInstance() / $sign->getInstance()


// Methode de classe  => classe => Singleton.getInstance()
// SingletonBD::getIntance()

$test1  = SingletonBD::getIntance();
$test2  = SingletonBD::getIntance();
$test3  = SingletonBD::getIntance();
$test4  = SingletonBD::getIntance();






