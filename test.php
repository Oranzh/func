<?php
$a = 'lee';
$a = md5($a);
echo $a;
$key = 103;

echo getXOR($a,$key);
function strToHex($string)//字符串转十六进制
	{ 
	$hex="";
	for($i=0;$i<strlen($string);$i++)
	$hex.=dechex(ord($string[$i]));
	$hex=strtoupper($hex);
	return $hex;
	}   

function getXOR($message, $key) {
  $arr = array();
  for ( $i = 0; $i < 32; $i++) {
	$m = substr($message,$i,1);
	$m = strToHex($message);
	$k = strToHex($key);
	array_push($arr,$m^$k);
  }
  return implode($arr,'');
}
