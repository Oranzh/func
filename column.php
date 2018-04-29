<?php

$array = array(1 => '模块1',2 => '模块2', 3 => '模块3');
$res = array(1,2);

foreach($array as $k => &$v) {
    if(in_array($k,$res)) {
        $v = 1;
    } else {
        $v = 0;
    }
} 
print_r($array);
