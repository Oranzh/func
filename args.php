<?php

function oldAdd() {
	$args = func_get_args();
	print_r($args);
}
oldAdd('1', '2', '3',4);

function add(...$args) {
	print_r($args);
}

add(1,2,12,45);

$arr = [
	2,
	3,
	4
];


add($arr);
echo add(...$arr);
