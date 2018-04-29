<?php

/**
 * 我的理解
 * send方法相当于next方法 ,会把key指向下一个标量
 **/
 
function gen() {
	$ret = yield 'yield1';
	var_dump('first gen dump');
	var_dump($ret);
	$ret = yield 'yield2';
	var_dump('second  gen dump');
	var_dump($ret);
}
$gen = gen();
//`var_dump($gen->current());
$gen->send('succ');
//$gen->next();
//var_dump($gen->current());
//$gen->send('fail');
//$gen->next();
//var_dump($gen->current());
