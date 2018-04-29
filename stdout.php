<?php
fwrite(STDOUT, "我是通过STDOUT写入；\n");
 
$stdout = fopen("php://stdout", "w");
fwrite($stdout, "我是通过php://stdout写入；");
fclose($stdout);
