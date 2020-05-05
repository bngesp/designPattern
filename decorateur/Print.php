<?php

/**
 * Affichage
 */
interface Affichage
{
	
	function print();
}

/**
 * Logger
 */
class Logger implements Affichage
{
	protected $msg;
	
	function __construct(string $message){
		$this->msg = $message;
	}

	public function print(){
		echo $this->msg;
	}
}

/**
 * LogDecorator
 */
abstract class LogDecorator implements Affichage
{
	protected $msgDecorator = null;


	function __construct(Affichage $af)
	{
		$this->msgDecorator = $af;
	}

}

/**
 * GrasLog
 */
class GrasLog extends LogDecorator
{


	public function print()
	{
		echo "<strong>";
		$this->msgDecorator->print();
		echo "</strong>";
		
	}
}

/**
 * GrasLog
 */
class IlaticLog extends LogDecorator
{


	public function print()
	{
		echo "<i>";
		$this->msgDecorator->print();
		echo "</i>";
		
	}
}



