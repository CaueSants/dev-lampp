<?php
require_once('vendor/autoload.php');

use model\ClasseA;

$obj = new ClasseA;
$test = $obj->hello("Test");

print_r($test);