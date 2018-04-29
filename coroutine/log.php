<?php

function logger($fileName) {
    $fileHandle = fopen($fileName, 'a');
    while (true) {
        fwrite($fileHandle, yield . "\n");
    }
}
 
$logger = logger(__DIR__ . '/log');
$logger->send('Foo');
$logger->send('Bar');
/**
 * 协程的支持是在迭代生成器的基础上, 增加了可以回送数据给生成器的功能(调用者发送数据给被调用的生成器函数). 这就把生成器到调用者的单向通信转变为两者之间的双向通信.
 *
 * 传递数据的功能是通过迭代器的send()方法实现的. 下面的logger()协程是这种通信如何运行的例子
 * 正如你能看到,这儿yield没有作为一个语句来使用, 而是用作一个表达式, 即它能被演化成一个值. 这个值就是调用者传递给send()方法的值. 在这个例子里, yield表达式将首先被”Foo”替代写入Log, 然后被”Bar”替代写入Log.
 */
