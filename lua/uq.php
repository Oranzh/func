<?php

$time_start = microtime_float();
$lua = new Lua();
$lua->eval(<<<CODE
sum = 0
for i = 1, 10000000 do
    sum = sum + i
end
print(sum);
CODE
);
$time_end = microtime_float();
$time = $time_end - $time_start;
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
echo "\r\n",$time;
