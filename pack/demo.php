<?php

$msg = '{"controller_name":"Ws","method_name":"sub","sub":"first_topic"}';
$length = strlen($msg);
var_dump($length);

$msg = pack('N',$length).$msg;

var_dump($msg);
