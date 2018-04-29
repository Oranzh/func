<?php

/**
 * 我的理解
 * send方法相当于next方法 ,会把key指向下一个标量
 **/
function gen() {
    yield 'foo';
    yield 'bar';
}
 
$gen = gen();
var_dump($gen->current());
var_dump($gen->send('something'));
