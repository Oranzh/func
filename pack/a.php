<?php
$str = 'hello';
$string = pack('N', 'china',5).$str;
var_dump($string); //输出结果: string(6) "china",最后一个字节是不可见的NUL
echo ord($string[5]); //输出结果: 0(ASCII码中0对应的就是nul)
echo "\n";
echo ord($string[6]); //输出结果: 0(ASCII码中0对应的就是nul)
echo "\n";
