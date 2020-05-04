<?php

include 'Logger.php';

$msg = " un message";

// $cons = new ConsoleLogger();

// $cons->log($msg);

// $file = new FileLogger();
// $file->log($msg);

$logger = LoggerFactory::getLogger("cons"); // => consoleloggers

$logger2 = LoggerFactory::getLogger("file");

$logger->log($msg);
$logger2->log($msg);