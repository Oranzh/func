<?php

$arr = array(
	1 => array('ext' => 11),
	2 => array('ext' => 22),
	3 => array('ext' => 33),
);

$res = array();
foreach($arr as $v) {
	$res[$v['ext']] = $v;
}
print_r($res);
