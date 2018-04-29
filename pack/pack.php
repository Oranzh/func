<?php

$str = 'this is a msg';
$tmp = pack("N",strlen($str) + 4) . $str;
var_dump($tmp);

sleep(3);
$t = unpack("N",$tmp);
var_dump($t);
$lenth = unpack("N",$tmp)[1];
echo 'lenth',"\n";
var_dump($lenth);
echo 'msg',"\n";
//$s = substr($tmp,-($lenth-4));
$s = substr($tmp,4);
var_dump($s);
