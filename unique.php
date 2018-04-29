<?php

function array_multi_unique($arr) {
	if(empty($arr)) return null;
	$res = array();
	foreach($arr as $v) { //降维
		$item = implode(',',$v);//
		$res[] = $item;
	}   
	$res = array_unique($res);
	foreach($res as &$v) {//升维
		$v = explode(',',$v);
	} 	  
	UNSET($v);
	return $res;
}
function array_unique_multi($arr) {
    $temp = array();
    foreach ($arr as $k => $v) {
        $v = implode(',', $v); //降维
        $temp[$k] = $v;
    }
    $temp = array_unique($temp);    //去重
    foreach ($temp as $k => $v) {
        $temp[$k] = explode(',', $v);   //升维
    }
    return $temp;
}


$array = array(
	1 => array('name'=>'lee','height' => 183),
	2 => array('name'=>'lee','height' => 183),
	3 => array('name'=>'gao','height' => 183)
);

$res = array_unique_multi($array);
print_r($res);
