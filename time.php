<?php

function microtime_float()
{
        list($usec, $sec) = explode(" ", microtime());
            return ((float)$usec + (float)$sec);
}


$time_start = microtime_float();
usleep(100);
$time_end = microtime_float();
$time = $time_end - $time_start;

//echo "Did nothing in $time seconds\n";

$time = "2017-08-04 09:43:26";

echo strtotime($time);

