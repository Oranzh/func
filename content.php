<?php
$link = 'http://img1.guirenli.cn/cyps/images/69664cf3c011b408cb6ca585e4dd778d.png';
$get = file_get_contents($link);
$put = file_put_contents('c.png',$get);
