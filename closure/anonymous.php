<?php

//匿名函数Anonymous Function
//$anony_func() 实际是调用了__invoke 函数 
$func = function($num) {
	return $num + 1;
};

echo $func(3),"\r\n";
echo $func->__invoke(4),"\r\n";


print_r(array_map(function($num){
	return $num * 2;
},[1,2,3]));
