<?php

include 'Print.php';

$testLog  = new Logger(" La classe GLAR");
$testLog->print();

$testDeco = new GrasLog($testLog);
$testDeco->print();

$testDecoI = new IlaticLog($testDeco);
$testDecoI->print();