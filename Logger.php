<?php

/**
 * Logger
 */
interface Logger
{	
	function log(String $msg);
}


/**
 * ConsoleLogger
 */
class ConsoleLogger implements Logger
{
	
	function __construct()
	{
		
	}

	public function log(String $msg)	
	{
		echo "<br>[Console] voici le ".$msg;
	}
}

/**
 * Filelogger
 */
class Filelogger implements Logger
{

	
	function __construct()
	{
		
	}

	public function log(String $msg)	
	{
		echo " <br>[File] voici le ".$msg;
	}

}


/**
 * LoggerFactory
 */
class LoggerFactory
{
	private static $log;

	function __construct()
	{
		
	}

	public static function getLogger($value='') : Logger
	{
		if ($value == "cons") {
			return new ConsoleLogger();
		}
		elseif ($value == "file") {
			return new Filelogger();
		}
		else return null;
	}
}





