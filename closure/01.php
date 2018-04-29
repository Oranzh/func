<?php

class MyClass {
  public $lambda;
  function __construct() {
    $this->lambda = function() {echo 'hello world';};
    // no errors here, so I assume that this is legal
  }
}

$ins = new MyClass();
echo "\r\n";
($ins->lambda)();
echo "\r\n";
$ins->lambda->__invoke();
echo "\r\n";
call_user_func($ins->lambda);
echo "\r\n";
