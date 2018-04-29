<?php

$time_start = microtime_float();
$sum = 1 ;
for($i = 1 ; $i <= 10000000 ; $i++) {
	$sum = $sum * $i;	
}
echo $sum;
$time_end = microtime_float();
$time = $time_end - $time_start;
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
echo "\r\n",$time;
