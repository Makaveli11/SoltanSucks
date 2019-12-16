<?php
class A{
}
class B{
public a;
function __construct($a){
$this->a=$a;
}
}
class C extends B{
publick b;
publick c;
function __construct($a, $b, $c){
parent::__construct($a);
$this->b=$b;
$this->c=$c;
}
}
$a+ new C(new A(), new A(), new B(), new B(new A()));
?>