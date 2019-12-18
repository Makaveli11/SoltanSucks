<?php

include_once'core/EquationInterface.php';
include_once'core/LogInterface.php';
include_once'core/LogAbstract.php';
include_once 'vm/Linear.php';
include_once 'vm/Square.php';
include_once 'vm/VmException.php';
include_once 'vm/Log.php';

$arr=array();

vm\Log::log('Version '.file_get_contents('./version'));

$arr[] = readline("a= ");
$arr[] = readline("b= ");
$arr[] = readline("c= ");

try {
    $solver = new vm\KvadrUr();
	$roots = $solver->solve($arr[0], $arr[1], $arr[2]);

    vm\Log::log("roots: " . implode(" , ", $roots));
   
}catch(vm\VmException $e) {

    vm\Log::log($e->getMessage());
}
vm\Log::write();
