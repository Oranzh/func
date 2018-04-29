<?php

$str = 'Lua is good';
$pattern  = 'good';
$replacement = 'bad';
$res = str_replace($pattern,$replacement,$str);
print($res);
