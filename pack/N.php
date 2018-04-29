<?php

$a = 123;
$msg = '{"controller_name":"Ws","method_name":"sub","sub":"first_topic"}';
$b = strlen($msg);
$r = pack('N2',$a,$b).$msg;

$head = unpack('N2',substr($r,0,8));
var_dump($head);
