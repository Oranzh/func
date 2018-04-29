<?php

$str = '{"type":"input","methodid":11,"codes":"019&029&089&123&124","zip":0,"nums":5,"times":5,"money":0.5,"mode":3,"point":"0","desc":"[后三直选_单式] 019|029|089|123|124","curtimes":"1523856634726"}';
var_dump($str);
$str = json_decode($str,true);
var_dump($str);
