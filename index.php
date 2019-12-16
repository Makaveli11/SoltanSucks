<?php
ini_set("display_errors",1);error_reporting(-1);
include_once("core/EquationInterface.php");
include_once("core/LogInterface.php");
include_once("core/LogAbstract.php");
include_once("vm/VException.php");
include_once("vm/Linear.php");
include_once("vm/Square.php");
include_once("vm/Log.php");

$a = 1;
$b = 2;
$c = -3;

try {
	$solver = new vm\Square($a, $b, $c);
	
	vm\Log::log("roots: " . implode(" ", $solver->ur2($a, $b, $c)));
}catch(vm\VException $ex) {
	vm\Log::log($ex->getMessage());
}

vm\Log::write();
?>
