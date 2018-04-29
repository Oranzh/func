<?php

//echo "请输出站点名称: ";
fwrite(STDOUT, "请输入站点名称：");  
$name = fgets(STDIN);
echo sprintf("输入的站点名称为: %s\n", $name);
 
$stdin = fopen('php://stdin', 'r');
echo "请输出域名: ";
$domain = fread($stdin, 128); //最多读取128个字符
echo sprintf("输入的域名为: %s\n", $domain);
fclose($stdin);
