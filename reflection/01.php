<?php
class foo {
	private $age = 20;
	public static function bar() {
        return __METHOD__;
    }		
}
$a = new foo();
$ref = new ReflectionClass($a);

var_dump($ref->getMethods());
