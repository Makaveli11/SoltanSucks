<?php
ini_set("display_errors",1);error_reporting(-1);
include_once("core/EquationInterface.php");
include_once("core/LogInterface.php");
include_once("core/LogAbstract.php");
include_once("v/VmException.php");
include_once("v/Linear.php");
include_once("v/Square.php");
include_once("v/Log.php");
$arr = [];
$arr[] = readline("a=");
$arr[] = readline("b=");
$arr[] = readline("c=");
try {
	$solver = new Vm\Square($arr[0], $arr[1], $arr[2]);
	
	Vm\Log::log("Roots: " . implode(", ", $solver->solve($arr[0], $arr[1], $arr[2])));
}catch(Vm\VmException $ex) {
	Vm\Log::log($ex->getMessage());
} 
Vm\Log::write();
?>
